<?php

//------------------------Recibir las variables por metodo POST----------------------
$email = $_POST['nombre'];
$pass = $_POST['pass'];
//------------------------------------------------------------------------------------

//----------------Encriptar contraseña--------------------------------------
$passEncryp = hash('sha256', 'pass'.$pass );
//--------------------------------------------------------------------------

//---------------Conexion a la base de  datos-------------------------------
$conn = new mysqli('db','administrator','adminpass123','PrensaMichoacana');
//---------------------------------------------------------------------------

//---------------Si hay un error en la conexion avisar al usuario-----------
if($conn->connect_errno){
    echo 'Error: Hubo un error al conectar la base de datos \n';
    echo 'Error: ' .$conn->connect_errno;
    exit;
  }
//----------------------------------------------------------------------------


//------------seleccionar el registro con el email que este por post----------------
$sql = 'SELECT * FROM `Usuario` WHERE Status=true AND Email = "'.$email.'" AND Pass = "'.$passEncryp.'" ';

$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    header('Status: 301 Moved Permanently', false, 301);
    header('Location:bienvenida.html');
}else{
    header('Status: 400 Not Found', false,400 );
    header('Location:index.html');
}
//-----------------------------------------------------------------------------------

?>