<?php
    require_once('../../config.php');
    // include("../../function.php")
    $id= $_GET["id"];
    $image=$_POST['anh'];
    
    
   
    $sql="UPDATE logo
    SET id='$id',
    image = '$image' 

    WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header('location: index_logokhoa.php ');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>