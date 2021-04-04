
<!--Se llama la conexion ala base de datos-->

<? php include("db.php") ?>
<? php include ("save_account.php"); ?>

<!--Contiene la cabecera del codigo -->
<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tu Mascota</title>

    <!--se incluye el FrameWork BOOTSTRAP4 por CDN-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <!--FREDOKA -->

     <link href="FolderStyles/estilo1.css" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Varela+Round&display=swap" rel="stylesheet">

</head>

<body>



	<h2 id="registerLink" class="P-2" >

		<nav class="navbar navbar-dark bg-dark">
		    <div class="container">

		        <a href="index.php" class="navbar-brand">Inicio</a>
		        <a href="Views/registroForm.php" class= "btn btn-info  float-right">Registrarse</a>

		    </div> 
		</nav>
	</h2>



    <div id="general">

        <!-- Encabezado -->
    
            <header>
                <h2 id="titleForm">Tu Mascota</h2>
            </header>

    </div>
	<!-- Formulario -->

    <!--Muestra el mensaje una vez enviado los datos del formulario -->

        <? php if (isset($_SESSION['message'])){ ?>
                
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">

                   <? php echo $_SESSION['message']; ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div> 

        <? php session_unset(); } ?>


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

          
           <button type= "submit" class="btn btn-info " name="register_account" >Register</button>

        </form>

     </section>

	 <!-- Formulario --> 
    <footer>
    
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>


</body>
</html>

