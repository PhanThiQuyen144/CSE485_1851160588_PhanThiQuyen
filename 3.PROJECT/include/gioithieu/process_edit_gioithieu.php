<?php
    // echo (" xin chao");
    require_once('../../config.php');
    // include("../../function.php")
    $id= $_GET["id"];
    // $img=$_POST['img'];
    $name=$_POST["tengiangvien"];
    // $description=$_POST['description'];
    $content=$_POST['noidung'];
    
   
    $sql="UPDATE gioithieu
    SET id='$id',
    name = '$name',
    content = '$content'
    WHERE id= $id ";
    if (mysqli_query($conn, $sql)) {
        header('location: index_gioithieu.php ');
    } else {
        // echo " co loi xay ra";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


?>