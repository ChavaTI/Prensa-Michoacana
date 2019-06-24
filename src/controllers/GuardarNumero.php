<?php

//----------------Variables que se reciben por metodo POST------------------
  $Fecha = $_POST['Fecha'];  
  $IdNumero = $IdNumero['IdNumero'];
  $NoPeriodico = $NoPeriodico['NoPeriodico'];
  $IdTomo = $IdTomo['IdTomo'];

  //---------------Conexion a la base de  datos-------------------------------
  $conn = new mysqli('db','administrator','adminpass123','PrensaMichoacana');

  //---------------Si hay un error en la conexion avisar al usuario-----------
  if($conn->connect_errno){
    echo 'Error: Hubo un error al conectar la base de datos \n';
    echo 'Error: ' .$conn->connect_errno;
    exit;
}


//----------------insertar los datos en la tabla ------------------------------
  $sql='INSERT INTO `Numero`( `NoPeriodico`, `Status`, `Fecha`, `IdTomo`) VALUES ("'.$NoPeriodico.'",1,"'.$Fecha.'","'.$IdTomo.'")';
  if($conn->query($sql)){
   header('Location: ../bienvenida.php');
  
  }else{
    echo "Error: Problemas al crear un nuevo número.... ".$conn->error;
}

//-----------------------------------------------------------------------------

//-------------------------cerrar conexion------------------------------------
$conn->close();
//------------------------------------------------------------------------------
?> 
