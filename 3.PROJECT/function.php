<?php
    function getAllTeachers(){
        global $conn;
        $sql="SELECT * FROM cse";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteAdmin($id){
        global $dbcon;
        $sql = "DELETE FROM cse WHERE id = '$id'";
        $result = mysqli_query($dbcon, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
    function editAdmin($id){
        global $dbcon;
        $sql = "SELECT * FROM cse WHERE id = '$id'";
        $result = mysqli_query($dbcon, $sql);
        $teacher = mysqli_fetch_all($result);
        return $teacher;
    }
    function getAllCSE1(){
        global $conn;
        $sql="SELECT * FROM cse1";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
      function editCSE1($id){
        global $conn;
        $sql = "SELECT * FROM cse1 WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $teacher = mysqli_fetch_all($result);
        return $teacher;
    }
      function deletecse1($id){
        global $conn;
        $sql = "DELETE FROM cse1 WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
    function getAllCSE2(){
        global $conn;
        $sql="SELECT * FROM cse2";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
      function editCSE2($id){
        global $conn;
        $sql = "SELECT * FROM cse2 WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $teacher = mysqli_fetch_all($result);
        return $teacher;
    }
      function deletecse2($id){
        global $conn;
        $sql = "DELETE FROM cse2 WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
    

?>