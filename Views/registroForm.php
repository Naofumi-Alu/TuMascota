<!--Se llama la conexion ala base de datos-->

<?php include('../include/header.php') ?>

<body>

    <h2 id="registerLink" class="P-2">

        <!--Navegacion -->

        <nav class="navbar navbar-dark bg-dark">

            <div class="container">

                <a href="../index.php" class="navbar-brand">Inicio</a>

                <a href="registroForm.php" class="btn btn-info float-right">Registrarse</a>

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

    <?php if(isset($_SESSION['message'])) { ?>

    <div class="alert alert- <?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">

        <?= $_SESSION['message'] ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

    </div>

    <?php session_unset(); } ?>

    <!-- Formulario -->

    <section>

        <form method="POST" action="../save_account.php" name="signup-form">

            <div id="card" class=" card  bg-info mb-3">

                <div class="row no-gutters">

                    <div class="campoForm">
                        <label>Username</label>
                        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required autofocus />
                    </div>

                    <div class="campoForm">
                        <label>Nombre</label>
                        <input type="text" name="nombre" pattern="[a-zA-Z0-9]+.{8,}" required />
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
                        <input type="text" name="documento" pattern="[a-zA-Z0-9]+" required />
                    </div>

                    <div class="campoForm">
                        <label>Número de contacto</label>
                        <input type="text" name="telephon" pattern="[a-zA-Z0-9]+" required />
                    </div>

                    <div class="campoForm">
                        <label>Correo</label>
                        <input type="email" name="email" pattern= "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
                    </div>

                    <div class="campoForm">
                        <label>Contraseña</label>
                        <input type="password" name="psw" required pattern=".{8,}" />
                    </div>

                    <div class="campoForm">
                        <label>Confirmar contraseña</label>
                        <input type="password" name="confirmationPsw" required />
                    </div>

                    <div class="clearfloat"></div>


                    <div class="campoForm">
                        <button type="submit" class="btn btn-info mb-4 " name="register_account">Register</button>
                    </div>

                </div>
            </div>
        </form>




    </section>


    <?php include('../include/footer.php'); ?>