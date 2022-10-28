<?php




$localhost = 'localhost';
$username = 'root';
$password  = '';
$database_name  = 'gatbank';





$conn= mysqli_connect($localhost,$username,$password,$database_name);
if(!$conn){
	die('not exit').mysqli_error();
}
else{
	echo("connection successful");
}
