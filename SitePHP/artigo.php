<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Balmy Developments - Blog</title>
</head>
<body>
    <?php
        session_start();
        include 'conexao.php';
        include 'nav.php';

        if(!empty($_GET['id'])) {

            $id = $_GET['id'];
            $cat = $_GET['cat'];

            $consulta = $cn->query("select * from vwArtigo where id='$id'");
            $consulta2 = $cn->query("select * from vwArtigo where cat='$cat'");
            $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
        } else {
            header("location:blog.php");
        }  
    ?>
        <div class="animated animatedFadeInUp fadeInUp">
        <img src="img/<?php echo $exibe['capa'];?>" width="100%" height="700px"> 
        <div class="abacaxi">
        <div class="form2">
            <h1><?php echo $exibe['titulo'];?></h1>
            <p><h6>Categoria: <?php echo $exibe['nome'];?></h6></p>
            <i><?php echo $exibe['autor'];?></i> </br>
            <i><?php echo $exibe['dataDoArtigo'];?></i></br></br>
            <p><?php echo $exibe['texto'];?></p></br>
            <i>Palavras-chave: <?php echo $exibe['palavrasChave'];?></i></br></br>
        </div>
        </div>
        </div>



        <div class="abacaxi">
        <div class="form3">
        <h3> Artigos que talvez você goste </h3> </br>
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="img/img.jpg" alt="image">
                <div class="card-body">
                <h2 class="card-title">Title</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <p class="card-text"><small class="text-muted"><a href="#">Ler mais</a></small></p>
            </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/img.jpg" alt="image">
                <div class="card-body">
                <h2 class="card-title">Title</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <p class="card-text"><small class="text-muted"><a href="#">Ler mais</a></small></p>
            </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/img.jpg" alt="image">
                <div class="card-body">
                <h2 class="card-title">Title</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <p class="card-text"><small class="text-muted"><a href="#">Ler mais</a></small></p>
            </div>
            </div>
        </div>
        </div>
        </div>
        </div>




        <?php 
        include 'footer.html'
        ?>
</body>
</html>