<?php 

include("db.php");

//toma los datos por POST y los almacena en la Base de Datos
// verifica si se envio algo por POST
if(isset($_POST['register_account'])){

		$username= $_POST['username'];
		$nombre= $_POST['nombre'];
		$documento= $_POST['documento'];
		$apellido= $_POST['apellido'];
		$cachorro= $_POST['cachorro'];
		//Cifra el password 
		$psw=password_hash( $_POST['psw'],PASSWORD_BCRYPT);
		$email= $_POST['email'];
		$telephon= $_POST['telephon'];
		//$confirmationPsw= $_POST['confirmationPsw'];

		$query = "INSERT INTO cliente (	Documento_de_identidad,Nombre,Apellido,Telefono_Celular,Username,E_mail,Nombre_de_la_mascota,Contraseña) VALUES ('$documento','$nombre','$apellido','$telephon','$username','$email','$cachorro','$psw')";
}

//inteta hacer la consulta ala base de datos
try {
	$result = mysqli_query($conn,$query);
	$_SESSION['message'] = 'Save Account succesfully';
	$_SESSION['message_type'] = 'success';
	header("location: Views/registroForm.php");	
} catch (\Throwable $result) {
	die("Query Failled".$result->getMessage());
}




	

?> 