<?php

//----------------Variables que se reciben por metodo POST------------------
  $Fecha = $_POST['fecha'];  
  $NoPeriodico = $_POST['NoPeriodico'];
  $IdTomo = $_GET['IdTomo'];
  $IdNumero = $_GET['IdNumero'];


  //---------------Conexion a la base de  datos-------------------------------
  $conn = new mysqli('db','administrator','adminpass123','PrensaMichoacana');

  //---------------Si hay un error en la conexion avisar al usuario-----------
  if($conn->connect_errno){
    echo 'Error: Hubo un error al conectar la base de datos \n';
    echo 'Error: ' .$conn->connect_errno;
    exit;
}


//----------------insertar los datos en la tabla ------------------------------
  $sql='UPDATE `Numero` SET `NoPeriodico`='.$NoPeriodico.',`Fecha`="'.$Fecha.'" WHERE IdNumero='.$IdNumero;
  if($conn->query($sql)){
   header('Location: ../Tomo.php?IdTomo='.$_GET['IdTomo'].'&NumeroTomo='.$_GET['NumeroTomo'].'&NombreTitulo='.$_GET['NombreTitulo']);
  
  }else{
    echo "Error: Problemas al crear un nuevo número.... ".$conn->error;
}

//-----------------------------------------------------------------------------

//-------------------------cerrar conexion------------------------------------
$conn->close();
//------------------------------------------------------------------------------
?> 
