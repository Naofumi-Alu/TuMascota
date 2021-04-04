
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

     <link href="../FolderStyles/estilo1.css" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Varela+Round&display=swap" rel="stylesheet">
    
</head>

<body>


<h2 id="registerLink" class="P-2" >

    <!--Navegacion -->

        <nav class="navbar navbar-dark bg-dark">

            <div class="container">

                <a  href="../index.php" class="navbar-brand">Inicio</a>

                <a  href="registroForm.php" class= "btn btn-info float-right">Registrarse</a>

            </div> 

        </nav>

</h2>


        <div id="general">

        <!-- Encabezado -->
    
            <header>
                <h2 id="titleForm">Formulario de registro</h2>
            </header>

        </div>


    <!--Muestra el mensaje una vez enviado los datos del formulario -->

        <? php if (isset($_SESSION['message'])){ ?>
                
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">

                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div> 
                
        <? php session_unset(); } ?>
        
        <!-- Formulario -->
    
        <section id="form">

            <form method="POST" action="../save_account.php" name="signup-form">
    
                
                <div class="campoForm">
                    <label>Username</label>
                    <input type="text" name="username" pattern="[a-zA-Z0-9]+"  required autofocus />
                </div>
    
                <div class="campoForm">
                    <label>Nombre</label>
                    <input type="text" name="nombre" pattern="[a-zA-Z0-9]+" required />
                </div>

                <div class="clearfloat"></div>

                <div class="campoForm">
                    <label>Apellido</label>
                    <input type="text" name="apellido" pattern="[a-zA-Z0-9]+" required />
                </div>

                <div class="campoForm">
                    <label>Nombre del cachorro</label>
                    <input type="text" name="cachorro" pattern="[a-zA-Z0-9]+" required />
                </div>
    
                <div class="clearfloat"></div>

                <div class="campoForm">
                    <label>Documento de identidad</label>
                    <input type="number" name="documento" pattern="[a-zA-Z0-9]+" required />
                </div>
    
                <div class="campoForm">
                    <label>Número de contacto</label>
                    <input type="tel" name="cachorro" pattern="[a-zA-Z0-9]+" required />
                </div>
    
                <div class="campoForm">
                    <label>Correo</label>
                    <input type="email" name="email" required />
                </div>
    
                <div class="campoForm">
                    <label>Contraseña</label>
                    <input type="password" name="contraseña" required pattern=".{8,}" />
                </div>

                <div class="campoForm">
                    <label>Confirmar contraseña</label>
                    <input type="password" name="contraseña" required />
                </div>
                
                <div class="clearfloat"></div>

                <button type= "submit" class="btn btn-info " name="register_account" >Register</button>
            </form>
    
    </section>

    <footer>
    
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

 

</body>
</html>

