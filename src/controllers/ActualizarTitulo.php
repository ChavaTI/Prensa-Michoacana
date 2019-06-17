<?php

//----------------Variables que se reciben por metodo POST------------------
  $nombre = $_POST['Nombre'];  
  $estado= $_POST['Estado'];
  $ciudad = $_POST['Ciudad'];
  $periodicidad = $_POST['Periodicidad'];
  $responsable = $_POST['Responsable'];
  $numerodepaginas = $_POST['Numerodepaginas'];
  $orientacionymedidas = $_POST['Orientacionymedidas'];
  $IdTitulo = $_POST['IdTitulo'];
 //---------------Conexion a la base de  datos-------------------------------
 $conn = new mysqli('db','administrator','adminpass123','PrensaMichoacana');

 //---------------Si hay un error en la conexion avisar al usuario-----------
 if($conn->connect_errno){
   echo 'Error: Hubo un error al conectar la base de datos \n';
   echo 'Error: ' .$conn->connect_errno;
   exit;
 }
   //----------------insertar los datos en la tabla ------------------------------
  $sql= ' UPDATE `Titulo` SET `Nombre`= "'.$nombre.'" ,`Estado`= "'.$estado.'" ,`Ciudad`= "'.$ciudad.'" ,`Periodicidad`= "'.$periodicidad.'" ,`Responsable`= "'.$responsable.'" ,`NoPaginas`= '.$numerodepaginas.',`OrientacionYMedidas`= "'.$orientacionymedidas.'" WHERE IdTitulo ='.$IdTitulo.'';

  if($conn->query($sql)){
    header('Location: ../bienvenida.php');
  }else{
    echo "Error: Problemas al crear un nuevo titulo .... ".$conn->error;
}

//-----------------------------------------------------------------------------

//-------------------------cerrar conexion------------------------------------
$conn->close();
//------------------------------------------------------------------------------
?> 