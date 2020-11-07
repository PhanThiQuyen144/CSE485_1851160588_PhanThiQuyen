<?php
    require("../../config.php");
    include("../bomontrungtam/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM hethongthongtin WHERE id = '$id'";
    if(deleteHethongthongtin($id)){
        header("location: index_hethongthongtin.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>