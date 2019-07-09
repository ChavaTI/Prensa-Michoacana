<?php
session_start();
if ($_SESSION['IdLogin'] == null) {
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
    <title>Numero</title>
</head>

<body>
        <main class="container">
            <header class="row">
                <h1>Título <?php echo $_GET['NombreTitulo']." > Tomo ". $_GET['NumeroTomo']." > Numero de periodico".$_GET['NoPeriodico'];?> </h1>
            </header>
            <nav class="row">
                <div class="col-12 navbar navbar-expand-sm bg-ligth bg-dark navbar-dark">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link mr-5" href="bienvenida.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link mr-5" href="about.html">Acerca de</a></li>
                        <li class="nav-item"><a class="nav-link mr-5" href="busqueda.php">Busqueda</a></li>
                        <div style="width: 14.9cm"></div>
                        <form action="controllers/cerrarSesion.php" method="get"><button class="btn btn-info ml-5" type="submit">Cerrar 
                                Sesion</button></form>
                    </ul>
                </div>
            </nav>
            <section class="row">
                <div class="row">
                    <?php

                    $conn = new mysqli('db','administrator','adminpass123','PrensaMichoacana');

                    if ($conn->connect_errno) {
                        echo 'Error: Hubo un error al conectar la base datos \n';
                        echo 'Error: ' .$conn->connect_errno;
                        exit;
                    }
                
                    $sql = 'SELECT * FROM Articulo WHERE Status=true AND IdNumero ='.$_GET['IdNumero'];
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="card mt-5 mr-4 text-white">';
                                echo'<div onclick="abrirArticulo('.$row['IdNumero'].','.$row['NoPeriodico'].','.$_GET['IdTomo'].',`'.$_GET['NombreTitulo'].'`)" class="card-header cabacera-carta">';
                                    echo '<h4 class="card-title">'.$row['Titulo']. '</h4>';
                                echo '</div>';
                                echo '<div onclick="abrirArticulo('.$row['IdNumero'].','.$row['NoPeriodico'].','.$_GET['IdTomo'].',`'.$_GET['NombreTitulo'].'`)" class="card-body cuerpo-carta">';
                                    echo '<p>Redactor: '.$row['Redactor'].'</p>';
                                    echo '<p>Tipo: '.$row['TipoDeArticulo'].'</p>';
                                    echo '<p>No Paginas: '.$row['NoPagina'].'</p>';
                                    $img = '';
                                    if($row['Imagenes'] == '1'){
                                        $img = 'Sí';
                                    }else{
                                        $img = 'No';
                                    }
                                    echo '<p>Imagenes: '.$img.'</p>';
                                echo '</div>';
                                echo '<div class= "card-footer pie-carta">';
                                    echo '<a href="http://localhost:9090/editarNumero.php?IdTomo='.$_GET['IdTomo'].'&NumeroTomo='.$_GET['NumeroTomo'].'&NombreTitulo='.$_GET['NombreTitulo'].'&IdNumero='.$row['IdNumero'].'&NoPeriodico='.$row['NoPeriodico'].'&Fecha='.$row['Fecha'].'" class="btn btn-info mr-5 icon-quill"></a>';
                                    echo ' <a onclick="confirmarEliminacionArticulo('.$row['IdNumero'].','.$_GET['IdTomo'].','.$_GET['NumeroTomo'].',`'.$_GET['NombreTitulo'].'`)" class="ml-5 btn btn-danger icon-cross"></a>';
                                echo '</div>';    
                            echo '</div>';
                     }
                    } else {
                        echo "<p> No hay Articulos en la base de datos </p>";
                    }
                    ?>
                    </div>
                    <div class= "row mt-4 mb-5">
                        <div class="col-1"><?php echo '<button class="icon-plus btn btn-success boton" onclick="agregarArticulo('.$_GET['IdNumero'].','.$_GET['NoPeriodico'].','.$_GET['NumeroTomo'].','.$_GET['IdTomo'].',`'.$_GET['NombreTitulo'].'`)"></button>';?></div>
                    </div>
                </section>
                <footer>
            </main>
            <script src="./js/main.js"></script>
        
</body>
</html>