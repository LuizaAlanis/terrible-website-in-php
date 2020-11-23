<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Novo artigo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <link rel="stylesheet" href="style.css">
    </head>
<body>	
    <?php
        session_start();	
        if(empty($_SESSION['Status']) || $_SESSION['Status']!=1){
        header('location:index.php');
        }

        include 'conexao.php';	
        include 'nav.php';

        $consultaCategoria = $cn->query("select * from categoria");
    ?>

    <div class="animated animatedFadeInUp fadeInUp">
        <div class="abacaxi">
            <form method="POST" action="inserirArtigo.php" class="form" enctype="multipart/form-data">
                <input type="text" name="txt_titulo" class="textbox" placeholder="Titulo"></br>
                <textarea rows="5" name="txt_sinopse" class="textbox" placeholder="Sinopse"></textarea> </br> </br>
                <textarea rows="5" name="txt_texto" class="textbox" placeholder="Texto"></textarea> </br> </br>
                <div class="select">
                <select name="slct_categoria">
                    <option value="">Categoria</option>
                    <?php
                    while($listaCategoria = $consultaCategoria -> fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?php echo $listaCategoria['nome'] ?>"><?php echo $listaCategoria['nome'] ?></option>	
                    <?php } ?>				
                </select>
                </div></br> </br>
                <input type="text" name="txt_palavrasChave" class="textbox" placeholder="Palavras-Chave"> </br> </br>
                <input type="text" name="txt_dataDoArtigo" class="textbox" placeholder="Data do artigo"> </br> </br>
                <input type="text" name="txt_autor" class="textbox" placeholder="Autor(a) do artigo"> </br> </br>
                <input type="file" accept="image/*" name="txtfoto1" required id="txtfoto1" placeholder="Foto">
                </br></br>
                <button type="submit" class="button"> Confirmar </button>
            </form> 
        </div>
    </div>
    </br></br></br></br></br>
</body>
</html>