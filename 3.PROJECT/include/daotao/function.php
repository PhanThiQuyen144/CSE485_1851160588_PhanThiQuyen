<?php
    function getAllTeachers(){
        global $conn;
        $sql="SELECT * FROM daotao";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteTeacher($id){
        global $conn;
        $sql = "DELETE FROM daotao WHERE id = '$id'";
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
        $sql = "SELECT * FROM daotao WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $teacher = mysqli_fetch_all($result);
        return $teacher;
    }
    

?>