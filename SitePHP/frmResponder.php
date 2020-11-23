<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Responder</title>
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

        $consulta = $cn->query("select * from perguntas where id='$id'");	
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
    ?>

    <div class="animated animatedFadeInUp fadeInUp">
        <div class="abacaxi">
            <form method="POST" action="alterarPergunta.php?id_altera=<?php echo $id; ?>" class="form">
                <input type="text" name="txt_autor" class="textbox" placeholder="Autor" value="<?php echo $exibe['autor']; ?>"> </br> </br>
                <input type="text" name="txt_email" class="textbox" placeholder="Email" value="<?php echo $exibe['email']; ?>"> </br> </br>
                <input type="text" name="txt_pergunta" class="textbox" placeholder="Pergunta" value="<?php echo $exibe['pergunta']; ?>"> </br> </br>
                <input type="text" name="txt_resposta" class="textbox" placeholder="Resposta" value="<?php echo $exibe['resposta']; ?>"> </br> </br>
                <input type="text" name="txt_valida" class="textbox" placeholder="Expor" value="<?php echo $exibe['valida']; ?>"> </br> </br>
                <br>
                <button type="submit" class="button"> Confirmar </button>
            </form> 
        </div>
    </div>
</body>
</html>