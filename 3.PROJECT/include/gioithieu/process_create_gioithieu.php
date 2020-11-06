<?php
    require("../../config.php");
    include("../gioithieu/function.php");
    // $magiangvien=$_POST['magv'];
   
    $tengiangvien=$_POST['tengiangvien'];
    // $vitri=$_POST['vitri'];
    $noidung=$_POST['noidung'];
    
    $sql = "INSERT INTO gioithieu (name,content)
    VALUES ('$tengiangvien','$noidung')";
  if (mysqli_query($conn, $sql)) {
      
    header('location: index_gioithieu.php');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>