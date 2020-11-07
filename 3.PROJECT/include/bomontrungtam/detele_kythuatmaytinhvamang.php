<?php
    require("../../config.php");
    include("../bomontrungtam/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM tinhocvakythuattinhtoan WHERE id = '$id'";
    if(deleteKythuatmaytinhvamang($id)){
        header("location: index_kythuatmaytinhvamang.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>