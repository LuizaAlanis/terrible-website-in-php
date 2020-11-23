<?php 
    include 'conexao.php';

    $nome = $_POST['txtnome']; 
    $email = $_POST['txtemail']; 
    $senha = $_POST['txtsenha'];

    $consulta = $cn->query("select email from usuario where email='$email'");
    $exibe = $consulta -> fetch(PDO::FETCH_ASSOC);

    if($consulta-> rowCount() == 1){
        header('location:cadastro.php');
    } else {
        $incluir = $cn->query("
        insert into usuario(id, nome, email, senha, adm)
        values(default,'$nome','$email','$senha', false)");
        echo "<script language=javascript> window.alert('Cadastro efetuado com sucesso'); </script>";
        header('location:login.php');
    }
?>