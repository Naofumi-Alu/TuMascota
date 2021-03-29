<? php include("db.php") ?>
<? php include("include/header.php")?>

	<h2 id="registerLink" class="P-2" >

		<nav class="navbar navbar-dark bg-dark">
		    <div class="container">

		        <a href="index.php" class="navbar-brand">Inicio</a>
		        <a href="Views/registroForm.php" class= "btn btn-primary float-right">Registrarse</a>

		    </div> 
		</nav>
	</h2>

	<!-- Formulario -->

    <section id="form">
        <form method="POST" action="" name="signup-form">


            <div class="campoForm">
                <label>usuario</label>
                <input type="text" name="user" class="form-control" required autofocus />
            </div>

            <div class="campoForm">
                <label>Contraseña</label>
                <input type="password" name="contraseña" class="form-control" required />
            </div>
            <div class="clearfloat"></div>
           
           <input type= "submit" class="btn btn-success btn block" name="register_account" value="Register">

     </section>

	 <!-- Formulario -->

<? php include("include/footer.php")?>
