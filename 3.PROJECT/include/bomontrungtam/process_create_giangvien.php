<?php
    require("../../config.php");
    include("../gioithieu/function.php");
    // $magiangvien=$_POST['magv'];
    $anh=$_POST['anh'];
    $thongtin=$_POST['thongtin'];
    $tengiangvien=$_POST['tengiangvien'];
    $vitri=$_POST['vitri'];
    $noidung=$_POST['noidung'];
    
    $sql = "INSERT INTO giangvien (iamge, infor,username,name,content)
    VALUES ('$anh','$thongtin','$tengiangvien','$vitri','$noidung')";
  if (mysqli_query($conn, $sql)) {
      
    header('location: index_giangvien.php');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>