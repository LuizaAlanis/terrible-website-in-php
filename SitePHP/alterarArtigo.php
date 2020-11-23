<?php
    include 'conexao.php';
    include 'resize-class.php';

    $id_altera = $_GET['id_altera'];
    $consulta = $cn->query("select capa from artigo where id = 'id_altera'"); 

    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    $titulo = $_POST['txt_titulo'];
    $categoria = $_POST['slct_categoria'];

    switch($categoria){
        case "Front-end":
            $categoria = 1;
        break;
        case "Back-end":
            $categoria = 2;
        break;
        case "Mobile":
            $categoria = 3;
        break;
    } 

    $sinopse = $_POST['txt_sinopse'];
    $texto = $_POST['txt_texto'];
    $palavras = $_POST['txt_palavrasChave'];
    $data = $_POST['txt_dataDoArtigo'];
    $autor = $_POST['txt_autor'];
    $recebe_foto1 = $_FILES['txtfoto1'];

    $destino = "img/";

    if (!empty($recebe_foto1['name'])) {
        preg_match("/\.(jpg|jpeg|png|gif){1}$/i",$recebe_foto1['name'],$extencao1);
        $img_nome1 = md5(uniqid(time())).".".$extencao1[1];

        $upload_foto1=1;
    }else {   
        $img_nome1=$exibe['capa'];
        $upload_foto1=0;
    }

    try {
        $alterar = $cn->query("update artigo set
        titulo = '$titulo',
        idCategoria = $categoria,
        sinopse = '$sinopse',
        texto = '$texto',
        palavrasChave = '$palavras',
        dataDoArtigo = '$data',
        autor = '$autor',
        capa = '$img_nome1',	
        
        where id = '$id_altera' 	
        ");
        
        if ($upload_foto1==1) {   
            move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);             
            $resizeObj = new resize($destino.$img_nome1);
            $resizeObj -> resizeImage(340, 480, 'crop');
            $resizeObj -> saveImage($destino.$img_nome1, 100);
        }
        
        header('location:blogLista.php');
        
    } catch(PDOException $e) {  // se exsitir algum problema, será gerado uma mensagem de erro
        echo $e->getMessage();    
    } 
?>
