<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastre-se</title>
</head>
<body>
    <?php
        include 'nav.php';
    ?>
    <div class="animated animatedFadeInUp fadeInUp">
    <div class="abacaxi">
            <form method="POST" action="inserirUsuario.php" name="logon" class="form">
                <input type="text" name="txtnome" class="textbox" required id="nome" placeholder="Name"> </br></br>               
                <input type="email" name="txtemail" class="textbox" required id="email" placeholder="Email"></br></br>
                <input type="password" name="txtsenha" class="textbox" required id="senha" placeholder="Password"></br>
                <br>
                <button type="submit" class="button"> Sign up </button>
                <div class="notMember">
                    <a href="login.php">Already a member? Sign in</a>
                </div>
            </form>
        </div>
    </div>
    </br></br></br></br></br></br>
    <?php
        include 'footer.html';
    ?>
</body>
</html>