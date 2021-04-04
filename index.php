<!--Se llama la conexion ala base de datos-->

<?php include("db.php") ?>
<?php include('include/header.php') ?>

<body>

    <h2 id="registerLink" class="P-2">

        <nav class="navbar navbar-dark bg-dark">
            <div class="container">

                <a href="index.php" class="navbar-brand">Inicio</a>
                <a href="Views/registroForm.php" class="btn btn-info  float-right">Registrarse</a>

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


            <button type="submit" class="btn btn-info " name="register_account">Register</button>

        </form>

    </section>


    <?php include('include/footer.php'); ?>