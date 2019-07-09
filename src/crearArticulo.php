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
    <title>Agregar un Articulo</title>
</head>

<body>
    <main class="container">
        <header class="row">
            <h1><?php echo 'Agrega un articulo  '  .$_SESSION['NombreUsuario']?></h1>
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
        <section class="row mt-5">
            <!-- Aqui va el formulario nuevo para agregar un nuevo titulo -->
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-body">
                            <?php echo '<form action="controllers/GuardarArticulo.php?IdNumero='.$_GET['IdNumero'].'&NoPeriodico='.$_GET['NoPeriodico'].'&NumeroTomo='.$_GET['NumeroTomo'].'&NombreTitulo='.$_GET['NombreTitulo'].'&IdTomo='.$_GET['IdTomo'].'" method="POST"> ';?>
                            <div class="form-group">
                                <label for=""> Tipo de artículo</label>
                                <input name="TipoDeArticulo" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Redactor</label>
                                <input name="Redactor" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Título</label>
                                <input name="Titulo" type="text"class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label form="">NoPagina</label>
                                <input name="NoPagina" type="number" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Contenido</label>
                                <textarea name="Contenido" rows="8" cols="50" class="form-control" require> </textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label ">
                                        <input name="Imagenes" type="checkbox" class="form-check-input "> Imagen
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Ciencia</label>
                                <select id="selectCiencia" onchange="listarCiencia()" name="" class="form-control">
                                    <option value=""></option>
                                    <option value="Ciencias excactas">Ciencias exactas</option>
                                    <option value="Ciencias humanas">Ciencias humanas</option>
                                    <option value="Historia">Historia</option>
                                    <option value="Fisica">Fisica</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <textarea id="ciencia" disabled name="ciencias" rows="8" cols="50" class="form-control" require> </textarea>
                            </div>


                            <div class="form-group">
                                <label for="">Tecnologia</label>
                                <select id="selectTec" onchange="listarTec()" name="" class="form-control">
                                    <option value=""></option>
                                    <option value="Ingenieria">Ingenieria</option>
                                    <option value="Electrica">Electrica</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <textarea id="tecnologia" disabled name="tecnologias" rows="8" cols="50" class="form-control" require> </textarea>
                            </div>


                            
                            <div class="form-group offset-12">
                                <input type="reset" value="Cancelar" class="btn btn-primary disabled">
                                <input type="submit" value="Agregar" class="btn btn-primary active">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="./js/main.js"></script>
</body>

</html>