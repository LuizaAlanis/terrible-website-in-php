<?php
	include 'conexao.php';

	$id = $_GET['id_altera'];
	$autor = $_POST['txt_autor'];
	$email = $_POST['txt_email'];
	$pergunta = $_POST['txt_pergunta'];
	$resposta = $_POST['txt_resposta'];
	$valida = $_POST['txt_valida'];
	
	/*
	echo "$id </br>";
	echo "$autor </br>";
	echo "$email </br>";
	echo "$pergunta </br>";
	echo "$resposta </br>";
	echo "$valida </br>"; */

	try {
	// comando update para realizar as trocas
	$alterar = $cn->query("update perguntas set  
		autor = '$autor',
		email = '$email',
		pergunta = '$pergunta',
		resposta = '$resposta',
		valida = '$valida'
	where id = '$id' 	
	"); // as alterações serão feitas baseadas pelo codigo

	header('location:responder.php');  //redirecionar (se tudo der certo)
	}catch(PDOException $e) {  // se exsitir algum problema, será gerado uma mensagem de erro
		echo $e->getMessage();  
	}
?>
