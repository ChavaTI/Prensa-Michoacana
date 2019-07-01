<?php

$conn = new mysqli('db','administrator','adminpass123','PrensaMichoacana');
if ($conn->conect_errno){
    echo 'Error:Hubo un error al conectar la base de datos \n';
    echo 'Error: ' .$conn->connect_errno;
    exit;
}
$sql = 'UPDATE `Numero` SET `Status`=false WHERE IdNumero='.$_GET['IdNumero'];

if ($conn->query($sql)){
    header('Location: ../Tomo.php?IdTomo='.$_GET['IdTomo'].'&NumeroTomo='.$_GET['NumeroTomo'].'&NombreTitulo='.$_GET['NombreTitulo']);
  }else{
        echo "Error: Problemas al eliminar un número ....".$conn->error;
}

$conn->close();

?>
