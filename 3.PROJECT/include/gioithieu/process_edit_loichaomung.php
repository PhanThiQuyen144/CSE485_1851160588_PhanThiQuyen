<?php
    require_once('../../config.php');
    // include("../../function.php")
    $id= $_GET["id"];
    $content=$_POST['noidung'];
    
    
   
    $sql="UPDATE loichaomung
    SET id='$id',
    content = '$content' 

    WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header('location: index_loichaomung.php ');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>