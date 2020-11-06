<?php
    require("../../config.php");
    include("../gioithieu/function.php");
    // $magiangvien=$_POST['magv'];
    $anh=$_POST['anh'];
    $thongtin=$_POST['thongtin'];
    $tengiangvien=$_POST['tengiangvien'];
    $vitri=$_POST['vitri'];
    $noidung=$_POST['noidung'];
    
    $sql = "INSERT INTO cocautochuc (image, position, name, infor,content)
    VALUES ('$anh','$vitri','$tengiangvien','$thongtin','$noidung')";
  if (mysqli_query($conn, $sql)) {
      
    header('location: index_cocautochuc.php');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>