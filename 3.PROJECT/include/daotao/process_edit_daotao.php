<?php
    require_once('../../config.php');
    // include("../../function.php")
    $id= $_GET["id"];
    $img=$_POST['img'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $content=$_POST['content'];
    
   
    $sql="UPDATE daotao
    SET id='$id',
    img = '$img', 
    name = '$name',
    description = '$description',
    content = '$content'
    WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header('location: index_daotao.php ');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
    }

?>