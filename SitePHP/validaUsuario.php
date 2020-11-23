<?php 
    include 'conexao.php';

    session_start();

    $Vemail = $_POST['txtemail'];
    $Vsenha = $_POST['txtsenha'];

    echo    $Vemail.'<br>';
    echo    $Vsenha.'<br>';

    $consulta = $cn->query("select * from usuario where email = '$Vemail' and senha = '$Vsenha' ");

    if($consulta->rowCount() == 1){
        $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
        if($exibeUsuario['adm'] == 0) {
            $_SESSION['ID'] = $exibeUsuario['id'];
            $_SESSION['Status'] = 0 ;
            header('location:index.php');
        }
        else {
            $_SESSION['ID'] = $exibeUsuario['id'];
            $_SESSION['Status'] = 1 ;
            header('location:index.php');
        }
    }
    else{
        header('location:erro.html');
    }
?>