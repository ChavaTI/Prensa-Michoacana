<?php

//----------------Variables que se resiven por metodo POST------------------
  $nombre = $_POST['nombre'];  
  $pass = $_POST['pass'];
  $email = $_POST['email'];
//---------------------------------------------------------------------------

//---------------Coneccion a la base de  datos-------------------------------
  $conn = new mysqli('db','administrator','adminpass123','PrensaMichoacana');
//---------------------------------------------------------------------------

//---------------Si hay un error en la conexion avisar al usuario-----------
  if($conn->connect_errno){
    echo 'Error: Hubo un error al conectar la base de datos \n';
    echo 'Error: ' .$conn->connect_errno;
    exit;
  }
//----------------------------------------------------------------------------

//----------------insertar los datos en la tabla ------------------------------
  $sql = 'INSERT INTO `Usuario`(`NombreUsuario`, `Contraseña`, `Email`, `Status`) VALUES ("Logan","1234","logan@yahoo.com",true)';
//-----------------------------------------------------------------------------
?>