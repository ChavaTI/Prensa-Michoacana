<?php

//----------------Variables que se reciben por metodo POST------------------
  $TipoDeArticulo = $_POST['TipoDeArticulo'];  
  $Redactor= $_POST['Redactor'];
  $Titulo = $_POST['Titulo'];
  $Contenido = $_POST['Contenido'];
  $NoPagina = $_POST['NoPagina'];
  $Imagenes = $_POST['Imagenes'];
  $IdNumero = $_GET['IdNumero'];

  if($Imagenes == 'on'){
    $Imagenes = 1;
  }else{
    $Imagenes = 0;
  }

  //---------------Conexion a la base de  datos-------------------------------
  $conn = new mysqli('db','administrator','adminpass123','PrensaMichoacana');

  //---------------Si hay un error en la conexion avisar al usuario-----------
  if($conn->connect_errno){
    echo 'Error: Hubo un error al conectar la base de datos \n';
    echo 'Error: ' .$conn->connect_errno;
    exit;
}


//----------------insertar los datos en la tabla ------------------------------
  $sql= 'INSERT INTO `Articulo`(`TipoDeArticulo`, `Redactor`, `Titulo`, `Contenido`, `NoPagina`, `Imagenes`, `IdNumero`, `Status`) VALUES ("'.$TipoDeArticulo.'","'.$Redactor.'","'.$Titulo.'","'.$Contenido.'","'.$NoPagina.'","'.$Imagenes.'","'.$IdNumero.'",1)';
  if($conn->query($sql)){
   header('Location: ../Numero.php?NombreTitulo='.$_GET['NombreTitulo'].'&IdTomo='.$_GET['IdTomo'].'&NumeroTomo='.$_GET['NumeroTomo'].'&NoPeriodico='.$_GET['NoPeriodico'].'&IdNumero='.$_GET['IdNumero']);
  }else{
    echo "Error: Problemas al guardar un artículo .... ".$conn->error;
}

//-----------------------------------------------------------------------------

//-------------------------cerrar conexion------------------------------------
$conn->close();
//------------------------------------------------------------------------------
?> 
