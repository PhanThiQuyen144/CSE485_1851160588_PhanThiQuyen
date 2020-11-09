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
     function getAllCongnghephanmem(){
        global $conn;
        $sql="SELECT * FROM congnghephanmem";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteCongnghephanmem($id){
        global $conn;
        $sql = "DELETE FROM congnghephanmem WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
     function getAllHethongthongtin(){
        global $conn;
        $sql="SELECT * FROM hethongthongtin";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteHethongthongtin($id){
        global $conn;
        $sql = "DELETE FROM hethongthongtin WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
     function getAllKhoahocmaytinh(){
        global $conn;
        $sql="SELECT * FROM khoahocmaytinh";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteKhoahocmaytinh($id){
        global $conn;
        $sql = "DELETE FROM khoahocmaytinh WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
     function getAllKythuatmaytinhvamang(){
        global $conn;
        $sql="SELECT * FROM tinhocvakythuattinhtoan";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteKythuatmaytinhvamang($id){
        global $conn;
        $sql = "DELETE FROM tinhocvakythuattinhtoan WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
      function getAllToanhoc(){
        global $conn;
        $sql="SELECT * FROM toanhoc";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteToanhoc($id){
        global $conn;
        $sql = "DELETE FROM toanhoc WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
     function getAllTrungtamtinhoc(){
        global $conn;
        $sql="SELECT * FROM trungtamtinhoc";
        $result= mysqli_query($conn,$sql);
        $teacher =mysqli_fetch_all($result);
        return $teacher;
    }
     function deleteTrungtamtinhoc($id){
        global $conn;
        $sql = "DELETE FROM trungtamtinhoc WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       if($result){
           return TRUE;

       }
       else{
           return FALSE;
       }
    }
?>