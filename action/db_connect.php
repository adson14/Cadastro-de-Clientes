<?php

//COnexão com o banco de dados

$servername="localhost";
$username="root";
$password="";
$db_name = "crud";


$conn = mysqli_connect($servername,$username,$password,$db_name);
mysqli_set_charset($conn,"utf8");//define a codificação para gravar os dados

if(mysqli_connect_error()){//CAso ocorra algum erro
	echo "Erro na conexão".mysql_connect_error;
}