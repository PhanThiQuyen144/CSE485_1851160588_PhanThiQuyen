<?php
    require("config.php");
    include("function.php");
    // $magiangvien=$_POST['magv'];
    $anh=$_POST['anh'];
    $thongtin=$_POST['thongtin'];
    // $tengiangvien=$_POST['tengiangvien'];
    // $vitri=$_POST['vitri'];
    $name=$_POST['name'];
    $name1 =$_POST['name1'];
    
    $sql = "INSERT INTO cse1 (image,infor,name, name1)
    VALUES ('$anh','$thongtin','$name','$name1')";
  if (mysqli_query($conn, $sql)) {
      
    header('location: index_cse1.php');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>