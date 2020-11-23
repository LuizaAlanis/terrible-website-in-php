<?php 
    include 'conexao.php';

    $autor = $_POST['txtnome']; 
    $email = $_POST['txtemail']; 
    $pergunta = $_POST['txtpergunta']; 

    $incluir = $cn->query("
        insert into perguntas(id, autor, email, pergunta, resposta, valida)
        values(default,'$autor','$email','$pergunta','','N')"); 
        header('location:faq.php');
?>