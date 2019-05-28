<?php
session_start();
if($_SESSION['IdLogin'] == null){
    header('Location:index.html');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Bienvenido</title>
</head>
<body>
    <main class="container">
        <header class="row">
            <h1><?php echo 'Bienvenido '.$_SESSION['NombreUsuario']?></h1>
        </header>
        <nav class="row">
            <div class="col-12 navbar navbar-expand-sm bg-light bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item"><a  class="nav-link mr-5" href="bienvenida.php">Inicio</a></li>
                    <li class="nav-item"><a  class="nav-link mr-5" href="about.html">Acerca de</a></li>
                    <li class="nav-item"><a  class="nav-link mr-5" href="busqueda.php">Busqueda</a></li>
                    <div style="width: 14.9cm"></div>
                    <form action="cerrarSesion.php" method="get"><button class="btn btn-info ml-5" type="submit">Cerrar Sesion</button></form>
                </ul>
            </div>
        </nav>
        <section class="row">
            <?php 
                //---------------Conexion a la base de  datos-------------------------------
                $conn = new mysqli('db','administrator','adminpass123','PrensaMichoacana');
                //---------------------------------------------------------------------------
                //---------------Si hay un error en la conexion avisar al usuario-----------
                if($conn->connect_errno){
                echo 'Error: Hubo un error al conectar la base de datos \n';
                echo 'Error: ' .$conn->connect_errno;
                exit;
                }
                //---------------seleccionar los titulos--------------------------------------
                $sql = 'SELECT * FROM `Titulo` WHERE Status=true';
                //----------------------------------------------------------------------------


        </section>
        <footer class="row">

        </footer>
    </main>
</body>
</html>