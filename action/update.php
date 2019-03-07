<?php
//iniio da sessão

session_start();
require_once 'db_connect.php';


if(isset($_POST['btn-editar'])){//Verifica o btn foi inserido na super global post
	$nome=mysqli_escape_string($conn,$_POST['nome']);//recebe os dados realizando os filtros com para segurança
	$sobrenome=mysqli_escape_string($conn,$_POST['sobrenome']);
	$email=mysqli_escape_string($conn,$_POST['email']);
	$idade=mysqli_escape_string($conn,$_POST['idade']);
	$id=   mysqli_escape_string($conn,$_POST['id']);

	$sql = "UPDATE clientes SET nome ='$nome', sobrenome='$sobrenome', email='$email',idade='$idade' WHERE
	id ='$id'";


	if (mysqli_query($conn,$sql)) {//se conseguir inserir os dados entra na condição abaixo

		$_SESSION['mensagem']= "Alterado com Sucesso";
		header('Location: ../index.php?Sucesso');

	}else{
		$_SESSION['mensagem']= "Erro ao Alterar";
		header('Location: ../index.php?Erro');
	}
}