<?php
    require_once('../../config.php');
  //   if($_POST['Ma_lop']==""||$_POST['Ten_lop']==""||$_POST['Giao_vien']=="null"||$_POST['Lich_hoc']==""||$_POST['Hoc_phi']==""||$_POST['Ngay_batdau']==""||$_POST['Ngay_ketthuc']==""||$_POST['Phong_hoc']=="")
  //   {
  //     header("location:add.php?err=loi");
  //   } 
  // else{
    $id=$_POST['id'];
    
    $img=$_POST['img'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $content=$_POST['content'];
    $sql = "INSERT INTO daotao  (id,img,name,description,content)
    VALUES ('$id', '$img', '$name', '$description','$content')";
  if (mysqli_query($conn, $sql)) {
    header('location: index_daotao.php  ');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
};
// };
?>