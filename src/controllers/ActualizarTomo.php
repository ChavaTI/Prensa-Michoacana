<?php
$numTomo = $_POST['numTomo']; 
$idTitulo = $_POST['idTitulo']; 
$Nombre = $_POST['NombreTitulo'];

$conn = new mysqli('db','administrator','adminpass123','PrensaMichoacana');

if($conn->connect_errno){
    echo 'Error: Hubo un error al conectar la base de datos \n';
    echo 'Error: ' .$conn->connect_errno;
    exit;
}

$sql='UPDATE `Tomo` SET `NumeroTomo`= $_POST['numTomo']; ,`IdTitulo`=1 WHERE IdTomo=1;
if($conn->query($sql)){
    header('location: ../Titulo.php?IdTitulo='.$idTitulo.'&NombreTitulo='.$Nombre);

}else{
    echo "Error: Problemas al crear un nuevo Tomo .... ".$conn->error;
}
$conn->close();

?>


