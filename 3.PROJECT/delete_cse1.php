<?php
    require("config.php");
    include("function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM cse1 WHERE id = '$id'";
    if(deletecse1($id)){
        header("location: index_cse1.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>