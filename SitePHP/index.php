<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        include 'conexao.php';
        include 'nav.php';
    ?>
    <div class="geral"></div>
    
    <?php
        include 'footer.html';
    ?>

</body>
</html>