<?php
    require("../../config.php");
    include("../thongbao/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM thongbao WHERE id = '$id'";
    if(deleteTeacher($id)){
        header("location: index_tb.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>