<?php
    require("../../config.php");
    include("../gioithieu/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM gioithieu WHERE id = '$id'";
    if(deleteTeacher($id)){
        header("location: index_gioithieu.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>