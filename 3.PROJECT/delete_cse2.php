<?php
    require("config.php");
    include("function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM cse2 WHERE id = '$id'";
    if(deletecse2($id)){
        header("location: index_cse2.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>