<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Balmy Developments - Blog</title>
    <style type="text/css">

    .card-group{
            display: flex;
            flex-flow:row;
            max-width: 2000px;
            flex-wrap: wrap;
            margin: 0 auto;
            justify-content:center;
            padding: 30px;
    }
        .card-group > .card{
          flex: 1 1 350px;
          width: 500px;
          margin: 5px 10px 5px 0px;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        include 'conexao.php';
        include 'nav.php';

        $consulta = $cn->query("select * from vwArtigo");
    ?>
   <div class="animated animatedFadeInUp fadeInUp">
        <h2> Blog </h2> </br>
        <div class="card-group">
        
        <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
                <div class="card">
                    <img class="card-img-top" src="img/<?php echo $exibe['capa']; ?>" alt="image">
                    <div class="card-body">
                    <h2 class="card-title"><?php echo $exibe['titulo']; ?></h2>
                    <p class="card-text"><?php echo $exibe['sinopse']; ?></p>
                    <p class="card-text"><small class="text-muted"><a href="artigo.php?id=<?php echo $exibe['id'];?>&cat=<?php echo $exibe['nome'];?>">Ler mais</a></small></p>
                </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <?php 
        include 'footer.html'
    ?>
</body>
</html>