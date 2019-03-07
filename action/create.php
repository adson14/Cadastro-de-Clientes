<?php
//iniio da sessão

session_start();
require_once 'db_connect.php';


if(isset($_POST['btn-cadastrar'])){//Verifica o btn foi inserido na super global post
	$nome=mysqli_escape_string($conn,$_POST['nome']);//recebe os dados realizando os filtros com para segurança
	$sobrenome=mysqli_escape_string($conn,$_POST['sobrenome']);
	$email=mysqli_escape_string($conn,$_POST['email']);
	$idade=mysqli_escape_string($conn,$_POST['idade']);

	$sql = "INSERT INTO clientes (nome,sobrenome,email,idade) VALUES ('$nome','$sobrenome','$email','$idade')";


	if (mysqli_query($conn,$sql)) {//se conseguir inserir os dados entra na condição abaixo

		$_SESSION['mensagem']= "Cadastrado com Sucesso";
		header('Location: ../index.php?Sucesso');

	}else{
		$_SESSION['mensagem']= "Erro ao cadastrar";
		header('Location: ../index.php?Erro');
	}
}