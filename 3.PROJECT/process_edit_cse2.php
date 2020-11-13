<?php
    require_once('config.php');
    // include("../../function.php")
    $id= $_GET["id"];
    $image= $_POST['anh'];
    // $position= $_POST['vitri'];
    $name= $_POST['name'];
    $infor= $_POST['thongtin'];
    $name1=$_POST['name1'];
    
    
   
    $sql="UPDATE cse2
    SET id='$id',
    image ='$image',
    infor ='$infor',
    name= '$name',
    name1 = '$name1'
    WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header('location: index_cse2.php ');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>