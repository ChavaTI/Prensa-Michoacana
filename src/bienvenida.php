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
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
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
                    <li class="nav-item"><a class="nav-link mr-5" href="bienvenida.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link mr-5" href="about.html">Acerca de</a></li>
                    <li class="nav-item"><a class="nav-link mr-5" href="busqueda.php">Busqueda</a></li>
                    <div style="width: 14.9cm"></div>
                    <form action="cerrarSesion.php" method="get"><button class="btn btn-info ml-5" type="submit">Cerrar
                            Sesion</button></form>
                </ul>
            </div>
        </nav>
        <section class="row">
            <div class="row">
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

                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo '<div class="card mt-5 mr-4 text-white">';
                            echo '<div class="card-header cabacera-carta">';
                                echo '<h4 class="card-title">'.$row['Nombre'].'</h4>';
                            echo '</div>';
                            echo '<div class="card-body cuerpo-carta">';
                                echo '<p>Localidad: '.$row['Ciudad'].','.$row['Estado'].'</p>';
                                echo '<p>Periodicidad: '.$row['Periodicidad'].'</p>';
                                echo '<p>Responsable: '.$row['Responsable'].'</p>';
                                echo '<p>No. Paginas: '.$row['NoPaginas'].'</p>';
                                echo '<p>Orientacion y Medidas : '.$row['OrientacionYMedidas'].'</p>';
                                echo '</div>';
                                echo '<div class="card-footer pie-carta">';
                                    echo ' <a href="http://localhost:9090/editarTitulo.php?IdTitulo='.$row['IdTitulo'].'" class="btn btn-info mr-5">Editar</a>';
                                    echo ' <a href="http://localhost:9090/eliminarTitulo.php?IdTitulo='.$row['IdTitulo'].'" class="btn btn-danger">Eliminar</a>';
                                echo '</div>';
                            echo '</div>';
                    }
                }else{
                    echo "<p>No hay titulos en la base de datos</p>";
                }
                //----------------------------------------------------------------------------
                ?>
            </div>
            <div class="row mt-4 mb-5">
                <button class="icon-plus btn btn-success boton" id="btn-addTitulo"></button>
            </div>
        </section>
        <footer class="row">

        </footer>
    </main>
    <script src="./js/main.js"></script>
</body>

</html>