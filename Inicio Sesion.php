<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    "
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <main>
        <div class="capa"></div>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Docente, ya tienes una cuenta?</h3>
                    <p>Inicia sesión para responder</p>
                    <button id="btn__iniciar-sesión">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Docente, aún no tienes una cuenta?</h3>
                    <p>Resgistrate para comenzar a responder</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--Formulario de inicio y registrar-->
            <div class="contenedor__login-register">
                <form action="php/login_usuario_be.php" class="formulario__login">
            <!--inicio-->
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="password" placeholder="contraseñar">
                    <button>Entrar</button>
                </form>
            <!--registrar-->
            <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                <input type="text" placeholder="Coreo Electronico Institucional" name="correo">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="contraseña" name="contrasena">
                <button>Registrarse</button>
            </form>
            
            
            </div>
        </div>
    </main>

    <script src="assets/js/script.js"></script>

</body>
</html>