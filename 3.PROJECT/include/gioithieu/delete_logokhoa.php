<?php
    require("../../config.php");
    include("../gioithieu/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM logo WHERE id = '$id'";
    if(deleteLogo($id)){
        header("location: index_logokhoa.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>