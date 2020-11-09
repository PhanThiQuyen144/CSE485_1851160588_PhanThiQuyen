<?php
    require_once('../../config.php');
    // include("../../function.php")
    $id= $_GET["id"];
    $image= $_POST['anh'];
    $position= $_POST['vitri'];
    $name= $_POST['tengiangvien'];
    $infor= $_POST['thongtin'];
    $content=$_POST['noidung'];
    
    
   
    $sql="UPDATE giangvien
    SET id='$id',
    iamge ='$image',
    infor ='$infor',
    username='$name',
    name ='$position',
    content = '$content' 

    WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header('location: index_giangvien.php ');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>