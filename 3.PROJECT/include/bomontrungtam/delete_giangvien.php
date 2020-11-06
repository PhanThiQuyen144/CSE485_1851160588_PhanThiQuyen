<?php
    require("../../config.php");
    include("../bomontrungtam/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM giangvien WHERE id = '$id'";
    if(deleteTeacher($id)){
        header("location: index_giangvien.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>