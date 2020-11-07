<?php
    require("../../config.php");
    include("../bomontrungtam/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM khoahocmaytinh WHERE id = '$id'";
    if(deleteKhoahocmaytinh($id)){
        header("location: index_khoahocmaytinh.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>