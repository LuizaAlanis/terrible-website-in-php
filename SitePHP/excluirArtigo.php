<?php
    include 'conexao.php';  // conexao com banco de dados

    $id=$_GET['id'];

    $excluir = $cn->query("delete from artigo where id='$id'");
    header('location:blogLista.php');
?>