<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
    <a href="index.php" class="logo"> BALMY </a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="blog.php">Blog</a></li>
        <?php if(empty ($_SESSION['ID'])) { ?>
            <li>
                <a href="login.php">Sign in</a>
            </li>
        <?php } else {
            if($_SESSION['Status'] == 0) {
                $consulta_usuario = $cn->query("select nome from usuario where id = '$_SESSION[ID]'");
                $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
        ?>
            <li><a href="#">Hello <?php echo $exibe_usuario['nome']; ?></a></li>
            <li><a href="sair.php"> Exit </a></li>
        <?php } else { ?>
            <li><a href="blogLista.php">Edit blog</a></li>
            <li><a href="responder.php">Edit FAQ</a></li>
            <li><a href="sair.php">Exit</a></li>
        <?php } } ?>
    </ul>
    </header>
</body>
</html>