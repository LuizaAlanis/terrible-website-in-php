<?php
    include 'conexao.php';
    include 'resize-class.php';

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

    preg_match("/\.(jpg|jpeg|png|gif|svg){1}$/i",$recebe_foto1['name'],$extencao1);

    $img_nome1 = md5(uniqid(time())).".".$extencao1[1];

    try { 
        $inserir=$cn->query("insert into artigo(titulo, idCategoria, sinopse, texto, palavrasChave, dataDoArtigo, autor, capa) 
        values ('$titulo', $categoria, '$sinopse', '$texto', '$palavras', '$data', '$autor', '$img_nome1')");
	
        move_uploaded_file($recebe_foto1['tmp_name'], $destino.$img_nome1);             
        $resizeObj = new resize($destino.$img_nome1);
        /* $resizeObj -> resizeImage(900, 640, 'crop'); */
        $resizeObj -> saveImage($destino.$img_nome1, 100);

        header('location:blogLista.php');

    }catch(PDOException $e) {  
        echo $e->getMessage();
    }
?>