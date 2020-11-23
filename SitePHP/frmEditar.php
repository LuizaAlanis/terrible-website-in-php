<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar artigo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <link rel="stylesheet" href="style.css">
    </head>
<body>	
    <?php
        session_start();	
        if(empty($_SESSION['Status']) || $_SESSION['Status']!=1){
        header('location:index.php');
        }
        $id = $_GET['id'];

        include 'conexao.php';	
        include 'nav.php';

        $consulta = $cn->query("select * from vwArtigo where id='$id'");	
        $consultaCategoria = $cn->query("select * from categoria");
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
    ?>

    <div class="animated animatedFadeInUp fadeInUp">
        <div class="abacaxi">
            <form method="POST" action="alterarArtigo.php?id_altera=<?php echo $id; ?>" class="form" enctype="multipart/form-data">
                <input type="text" name="txt_titulo" class="textbox" placeholder="Titulo" value="<?php echo $exibe['titulo']; ?>"></br>
                <textarea rows="5" name="txt_sinopse" class="textbox" placeholder="Sinopse"><?php echo $exibe['sinopse']; ?></textarea> </br> </br>
                <textarea rows="5" name="txt_texto" class="textbox" placeholder="Texto"><?php echo $exibe['texto']; ?></textarea> </br> </br>
                <div class="select">
                <select name="slct_categoria">
                    <option value="<?php echo $exibe['nome']; ?>"><?php echo $exibe['nome']; ?></option>
                    <?php
                    while($listaCategoria = $consultaCategoria -> fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?php echo $listaCategoria['nome'] ?>"><?php echo $listaCategoria['nome'] ?></option>	
                    <?php } ?>				
                </select>
                </div> </br>
                <input type="text" name="txt_palavrasChave" class="textbox" placeholder="Palavras-Chave" value="<?php echo $exibe['palavrasChave']; ?>"> </br> </br>
                <input type="text" name="txt_dataDoArtigo" class="textbox" placeholder="Data do artigo" value="<?php echo $exibe['dataDoArtigo']; ?>"> </br> </br>
                <input type="text" name="txt_autor" class="textbox" placeholder="Autor(a) do artigo" value="<?php echo $exibe['autor']; ?>"> </br> </br>
                
                <img src="img/<?php echo $exibe['capa']; ?>" width="100%" >	
                <input type="file" accept="image/*" name="txtfoto1" id="txtfoto1" placeholder="Foto">
                </br></br>
                <button type="submit" class="button"> Confirmar </button>
            </form> 
        </div>
    </div>
    </br></br></br></br></br>
</body>
</html>