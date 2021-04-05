<?php 

include("db.php");

//Declaration of variables


if(isset($_POST['register_account'])){
	$username= $_POST['username'];
	$nombre= $_POST['nombre'];
	$documento= $_POST['documento'];
}

$query = "INSERT INTO cliente (Nombre,Username,Documento_de_Identidad) VALUES ('$nombre','$username','$documento')";


$result = mysqli_query($conn,$query);


if (!$result) {
	die("Query Failled");
}
	$_SESSION['message'] = 'Save Account succesfully';
	$_SESSION['message_type'] = 'success';
	header("location: Views/registroForm.php");	



?> 