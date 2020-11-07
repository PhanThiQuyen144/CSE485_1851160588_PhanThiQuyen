<?php
    require("../../config.php");
    include("../daotao/function.php");
    $id= $_GET["id"];
    $sql = "DELETE FROM daotao WHERE id = '$id'";
    if(deleteTeacher($id)){
        header("location: index_daotao.php");
        exit();
    }
    else{
        echo("thong bao loi xay ra");
    }
    
?>