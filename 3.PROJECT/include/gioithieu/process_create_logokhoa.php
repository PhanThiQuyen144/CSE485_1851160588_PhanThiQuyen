<?php
    require("../../config.php");
    include("../gioithieu/function.php");
    // $magiangvien=$_POST['magv'];
   
    $anh=$_POST['anh'];
    // $vitri=$_POST['vitri'];
    // $noidung=$_POST['noidung'];
    
    $sql = "INSERT INTO logo (image)
    VALUES ('$anh')";
  if (mysqli_query($conn, $sql)) {
      
    header('location: index_logokhoa.php');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>