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
    

?>