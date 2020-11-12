<?php
    // Kiem tra
    $errors = array();
    $email = $_POST['txtUsername'];
	if (empty($email)) {
		$errors[] = 'You forgot to enter your username.';
    }

    $password = $_POST['txtPassword'];
	
	if (empty($password)) {	
			$errors[] = 'You forgot to enter your password.';
	} 
    // Kiem tra Error:
    if (empty($errors)){
        // B1: Ket noi database Server;
        $conn = mysqli_connect('localhost','root','','cse');
        if(!$conn){
            die('Khong the ket noi');
        }
        // B2: Khai bao cau truy van
        $sql = "SELECT * FROM cse WHERE username='$email'";
        // echo $sql;
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            // print_r($row);
            $password_hash = $row['password'];
            // echo $password_hash;
            if(password_verify($password,$password_hash)){?>
                <script>alert(" chao mung ban den voi CSE")</script>
                <?php
                echo("chao mung ban den voi CSE");
                header(
                    'location: hethong.php');
            //    echo "OK, khớp.";
            }else{
                  ?>
                <script>
                   alert("username hoac mat khau khong dung, moi nhap lai");
                
                </script>
                <?php
                header('location: Login.php');
               
                // echo "Chưa khớp";
            }
        }else{
            echo ".....";
        }

    }else{
        // Co loi, hien thi lai loi cho nguoi dung biet
        echo "Co loi nhap lieu ...";
        header( 'location: Login.php');
    }
?>