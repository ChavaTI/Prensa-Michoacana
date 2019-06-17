<?php
    $conn = new mysqli('db','administrator','adminpass1223','PrensaMichoacana');
    if($conn->conect_errno){
        echo 'Error:Hubo un error al conectar la base de datos \n';
        echo 'Error: ' .$conn->connect_errno;
        exit;
    }
    $sql = 'UPDATE `Tomo` SET `Status`=false WHERE IdTomo='.$_GET['IdTomo'];
    
    if($conn->query($sql)){
        header('Location: ../Titulo.php');
      }else{
            echo "Error: Problemas al crear un nuevo tomo ....".$conn->error;
    }

    $conn->close();

?>