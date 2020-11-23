<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        include 'conexao.php';
        include 'nav.php';
    ?>

    <div class="animated animatedFadeInUp fadeInUp">
        <div class="abacaxi">
            <form action="duvida.php" method="post" class="form">
                <input type="text" name="txtnome" class="textbox" required id="nome" placeholder="Your name"> </br></br>
                <input type="email" name="txtemail" class="textbox" required id="email" placeholder="Your email"> </br></br>
                <input type="pergunta" name="txtpergunta" class="textbox" required id="pergunta" placeholder="Your question here">   </br>
                <br>
                <button type="submit" class="button"> Send </button>
            </form>
        </div>
    </div>

    <?php
        include 'footer.html';
    ?>
</body>
</html>