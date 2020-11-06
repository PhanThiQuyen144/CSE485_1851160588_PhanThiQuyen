<?php
    function getAllTeachers(){
        global $conn;
        $sql="SELECT * FROM gioithieu";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteTeacher($id){
        global $conn;
        $sql = "DELETE FROM gioithieu WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
    function editTeacher($id){
        global $conn;
        $sql = "SELECT * FROM gioithieu WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $teacher = mysqli_fetch_all($result);
        return $teacher;
    }
    function getAllLogo(){
        global $conn;
        $sql="SELECT * FROM logo";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteLogo($id){
        global $conn;
        $sql = "DELETE FROM logo WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
    function getAllLoichaomung(){
        global $conn;
        $sql="SELECT * FROM loichaomung";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteLoichaomung($id){
        global $conn;
        $sql = "DELETE FROM loichaomung WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
    function getAllCocautochuc(){
        global $conn;
        $sql="SELECT * FROM cocautochuc";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteCocautochuc($id){
        global $conn;
        $sql = "DELETE FROM cocautochuc WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
    function getAllHoptacquocte(){
        global $conn;
        $sql="SELECT * FROM hoptacquocte";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteHoptacquocte($id){
        global $conn;
        $sql = "DELETE FROM hoptacquocte WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }

?>