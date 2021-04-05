<?php 

include("db.php");

//Declaration of variables

$username=" " ;
$nombre= " ";
$documento=" ";
$query = " ";
$result = false;


if(isset($_POST['register_account'])){
	$username= $_POST['username'];
	$nombre= $_POST['nombre'];
	$documento= $_POST['documento'];
}

$query = "INSERT INTO cliente (Nombre,Username,Documento_de_Identidad) VALUES ('$nombre','$username','$documento')";


$result = mysqli_query($conn,$query);

echo $username;
echo $nombre;
echo $documento;


if (!$result) {
	echo 'ERROR Query Failled  /';
	die("Query Failled");
}else{
	$_SESSION['message'] = 'Save Account succesfully';
	$_SESSION['message_type'] = 'success';
	header("location: Views/registroForm.php");	
	echo 'Save Account Query succesfully';
}

?> 