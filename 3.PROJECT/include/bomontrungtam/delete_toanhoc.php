<?php
    require("../../config.php");
    include("../bomontrungtam/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM toanhoc WHERE id = '$id'";
    if(deleteToanhoc($id)){
        header("location: index_toanhoc.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>