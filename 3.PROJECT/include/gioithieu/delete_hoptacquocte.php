<?php
    require("../../config.php");
    include("../gioithieu/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM hoptacquocte WHERE id = '$id'";
    if(deleteHoptacquocte($id)){
        header("location: index_hoptacquocte.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>