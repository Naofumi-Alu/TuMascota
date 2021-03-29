
<? php include("include/header.php")?>

<h2 id="registerLink" class="P-2" >

        <nav class="navbar navbar-dark bg-dark">
            <div class="container">

                <a href="../index.php" class="navbar-brand">Inicio</a>
                <a href="registroForm.php" class= "btn btn-primary float-right">Registrarse</a>

            </div> 
        </nav>
    </h2>


    <div id="general">
        <!-- Encabezado -->
    
        <header>
            <h2 id="titleForm">Formulario de registro</h2>
        </header>
    
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

                <input type= "submit" class="btn btn-success btn block" name="register_account" value="Register">

            </form>
                </div>
        </section>

<? php include("include/footer.php")?>
