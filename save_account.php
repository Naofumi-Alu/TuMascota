<?php 

include("db.php");

if(isset($_POST['register_account'])){
	$_username=$_POST['username'];
	$_nombre=$_POST['nombre'];
}

$query = "INSERT INTO cliente(Nombre,Username) VALUES ('$nombre','$username')";

$result = mysqli_query($conn,$query);


if (!$result) {
	die("Query Failled");
}
	
	$_SESSION['message'] = 'Save Account succesfully';
	$_SESSION['message_type'] = 'success';
	header("location: index.php");


?> 