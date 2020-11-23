<!doctype html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            include 'nav.php';
        ?>
        <div class="animated animatedFadeInUp fadeInUp">
            <div class="abacaxi">
                <form method="POST" action="validaUsuario.php" name="logon" class="form">
                    <input type="email" name="txtemail" class="textbox" required id="email" placeholder="Email"> </br> </br>
                    <input type="password" name="txtsenha" class="textbox" required id="senha" placeholder="Password"> </br>
                    <br>
                    <button type="submit" class="button"> Sign in </button>
                    <div class="notMember">
                        <a href="cadastro.php">Not a member yet? Sign Up</a>
                    </div>
                </form>
                
            </div>
        </div>

        <?php
            include 'footer.html';
        ?>
    </body>
</html>