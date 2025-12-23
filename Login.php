<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/Estilos.css">
        <!-- SE ASIGNAN LOS ICONOS A IMPLEMENTAR -->
        <link rel="icon" href="imgs/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="imgs/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png">
        <link rel="manifest" href="imgs/site.webmanifest">
        <title>MANAGE_UTN | Iniciar sesión</title>
        <!-- Definicion del tipo de escritura en caracteres -->
        <meta charset="utf-8">
        <!-- Descripcion del sitio -->
        <meta name="description" content="Sitio web Administrativo de Vinculación Empresarial en la Universidad Tecnologica de Nayarit">
        <!-- Palabras clave (busquedas) -->
        <meta name="keywords" content="Administrativo, Expediente, Gestion de convenios, Departamentos, Proyectos">
        <!--% Ayuda a hacer responsive %-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--% Lo hace compatible con todos navegadores %-->
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <!-- Importacion de la biblioteca de animaciones AOS-->
        <link href="aos/dist/aos.css" rel="stylesheet"> 
    </head>

    <body>
        <main>
            <div class="Principal">
                <div class="caja_trasera">
                    <div class="caja_inicio">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la pagina</p>
                        <button id="btn_inicio-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja_registro">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn_registro">Regístrarse</button>
                    </div>
                </div>
    
                <!--Formulario para login y registro-->
                <div class="inicio_registro">
                    <!--Login-->
                    <form action="php/ValidarSesion.php" method="POST" class="finicio">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button type="submit" name="login">Entrar</button>
                    </form>
    
                    <!--Registro-->
                    <form action="php/Registro_usuarios.php" method="POST" class="fregistro">
                        <h2>Regístrate</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre">
                        <input type="text" placeholder="Correo" name="email">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <input type="number" placeholder="No. rol" name="rol_id">
                        <!--input type="submit" name="registrar" value="registrar"-->
                        <button type="submit" name="registrar">Registrar</button>
                    </form>
                </div>
            </div>
        </main>
        <script src="js/script.js"></script>
    </body>
</html>