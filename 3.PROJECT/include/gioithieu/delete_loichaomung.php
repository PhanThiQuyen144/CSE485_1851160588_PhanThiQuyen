<?php
    require("../../config.php");
    include("../gioithieu/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM loichaomung WHERE id = '$id'";
    if(deleteLoichaomung($id)){
        header("location: index_loichaomung.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>