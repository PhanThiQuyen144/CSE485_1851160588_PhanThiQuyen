<?php
    require("../../config.php");
    include("../bomontrungtam/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM trungtamtinhoc WHERE id = '$id'";
    if(deleteTrungtamtinhoc($id)){
        header("location: index_trungtamtinhoc.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>