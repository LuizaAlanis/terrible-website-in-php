<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Minha Loja</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>	
        <?php
            session_start();	
            // se a sessão id estiver vazia ou se a sessão estatus for diferente de adm entao execute
            if(empty($_SESSION['Status']) || $_SESSION['Status'] != 1){
                    header('location:index.php');  // redireciona para página index.php
            }	
            include 'conexao.php';	
            include 'nav.php';

            $consulta = $cn->query("select * from perguntas");
        ?>  
        </br></br>
        <div class="animated animatedFadeInUp fadeInUp">
            </br></br></br>
                <table class="table table-borderless table-hover">
                    <thead>
                        <th scope="col"><h2></h2></th>
                        </tr>
                    </thead>
                    <thead>
                        <th scope="col"><h2></h2></th>
                        <th scope="col"><h2></h2></th>
                        <th scope="col"><h2>Perguntas</h2></th>
                        </tr>
                    </thead>
                    <thead>
                        <th scope="col"><h2></h2></th>
                        </tr>
                    </thead>
                    <thead>
                        <th scope="col"><h3></h3></th>
                        <th scope="col"><h3></h3></th>
                        <th scope="col"><h3>Autor</h3></th>
                        <th scope="col"><h3>Pergunta</h3></th>
                        <th scope="col"><h3>Válidada</h3></th>
                        <th scope="col"><h3></h3></th>
                        <th scope="col"><h3></h3></th>
                        <th scope="col"><h3></h3></th>
                        <th scope="col"><h3></h3></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><?php echo $exibe['autor'];?></td>
                                <td><?php echo $exibe['pergunta'];?></td>
                                <td><?php echo $exibe['valida'];?></td>
                                <td><a href="frmResponder.php?id=<?php echo $exibe['id'];?>"><button class="button"> Responder </button></a></td>
                                <td><a href="excluir.php?id=<?php echo $exibe['id']; ?>"><button class="button"> Excluir </button></a></td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <thead>
                        <th scope="col"><h3></h3></th>
                        </tr>
                    </thead>
                </table> 
            </div>
        </div>
    </body>
</html>