<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Minha Loja</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styleFAQ.css">
    </head>
    <body>	
        <?php
            //session_start();	
            // se a sessão id estiver vazia ou se a sessão estatus for diferente de adm entao execute
            //if(empty($_SESSION['Status']) || $_SESSION['Status'] != 1){
            //        header('location:index.php');  // redireciona para página index.php
            //}	
            
            session_start();
            include 'conexao.php';	
            include 'nav.php';
            
            $consulta = $cn->query("select * from perguntas where valida = 'S'");
        ?> 
<div class="space"></div>
<div class="geral">
<div class="animated animatedFadeInUp fadeInUp">
<div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
  <svg xmlns="http://www.w3.org/2000/svg">
    <symbol viewBox="0 0 24 24" id="expand-more">
      <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
    <symbol viewBox="0 0 24 24" id="close">
      <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
  </svg>
</div>

    <details open>
        <summary>
            Does this FAQ have what I need?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
        </summary>
        <p>Maybe! you can search, and, if you don't find what you wanna know, <a href="duvidaForm.php"> do you question here</a>.</p>
    </details>

    <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
        <details>
            <summary>
            <?php echo $exibe['pergunta']; ?>
                <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
                <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
            </summary>
            <?php echo $exibe['resposta']; ?>
        </details>
    <?php } ?>
    </div>
    </div>
    <?php
        include 'footer.html';
    ?>
    </body>
</html>