<?php 

include("db.php");

//Declaration of variable

$username=" " ;
$nombre= " ";
$query = " ";
$result = " ";


if (isset($_POST['register_account'])){
	$username= $_POST['username'];
	$nombre= $_POST['nombre'];
}


$query = "INSERT INTO cliente(Nombre,Username) VALUES ('$nombre','$username')";

$result = mysqli_query($conn,$query);


if (!$result) {
	die("Query Failled");
}
	
	$_SESSION['message'] = 'Save Account succesfully';
	$_SESSION['message_type'] = 'success';
	header("location: Views/registroForm.php");

?> 