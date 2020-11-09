<?php
    require_once('../../config.php');
    // include("../../function.php")
    $id= $_GET["id"];
    $image= $_POST['anh'];
    $position= $_POST['vitri'];
    $name= $_POST['tengiangvien'];
    $infor= $_POST['thongtin'];
    $content=$_POST['noidung'];
    
    
   
    $sql="UPDATE cocautochuc
    SET id='$id',
    image ='$image',
    position ='$position',
    name='$name',
    infor ='$infor',
    content = '$content' 

    WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header('location: index_cocautochuc.php ');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>