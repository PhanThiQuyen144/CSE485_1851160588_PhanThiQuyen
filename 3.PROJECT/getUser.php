<?php
    if(isset($_POST['id'])){
        $id = $_POST['id']; // bangr department 
    }
    	 $host = 'localhost';
    						$user = 'root';
    						$pass = '';
    						$db   = 'cse';
    						$conn = mysqli_connect($host,$user,$pass, $db);
    						if(!$conn){
        					die("Không thể kết nối");
							}
    // require('config.php');
    // 2. Khai bao Truy van
    $sql = "SELECT * FROM cse WHERE id = '$id'";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    $users_arr = array();
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];// bang users
        $username = $row['username']; // bangr users
        $displayname = $row['displayname';]
        $email= $row['email'];
        // $designation =$row['designation'];
        //  $age= $row['age'];

        // $users_arr[] = array("id" => $userid, "name" => $name, "address"=> $address, "gender"=>$gender,"designation"=>$designation,"age"=>$age);
         $users_arr[] = array("id" => $id, "username" => $username, 'displayname'=> $displayname, 'email' => $email);
        //alert($users_arr);
    }
    echo json_encode($users_arr);

?>