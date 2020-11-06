<?php
    function getAllTeachers(){
        global $conn;
        $sql="SELECT * FROM giangvien";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteTeacher($id){
        global $conn;
        $sql = "DELETE FROM giangvien WHERE id = '$id'";
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
        $sql = "SELECT * FROM giaovien1 WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $teacher = mysqli_fetch_all($result);
        return $teacher;
    }
    

?>