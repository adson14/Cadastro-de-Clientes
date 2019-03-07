<?php
//iniio da sessão

session_start();
require_once 'db_connect.php';


if(isset($_POST['btn-deletar'])){//Verifica o btn foi inserido na super global post
	
	$id=   mysqli_escape_string($conn,$_POST['id']);

	$sql = "DELETE FROM clientes WHERE id='$id'";


	if (mysqli_query($conn,$sql)) {//se conseguir inserir os dados entra na condição abaixo

		$_SESSION['mensagem']= "Deletado com Sucesso";
		header('Location: ../index.php?Sucesso');

	}else{
		$_SESSION['mensagem']= "Erro ao Deletar";
		header('Location: ../index.php?Erro');
	}
}