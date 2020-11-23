<?php
    include 'conexao.php';  // conexao com banco de dados

    $id=$_GET['id'];

    $excluir = $cn->query("delete from perguntas where id='$id'");
    header('location:responder.php');
?>