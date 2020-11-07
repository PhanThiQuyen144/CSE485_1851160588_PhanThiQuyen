<?php
    require("../../config.php");
    include("../bomontrungtam/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM congnghephanmem WHERE id = '$id'";
    if(deleteCongnghephanmem($id)){
        header("location: index_congnghephanmem.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>