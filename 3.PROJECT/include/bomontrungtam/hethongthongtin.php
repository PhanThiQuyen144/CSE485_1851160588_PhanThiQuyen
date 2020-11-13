<!doctype html>
<html lang="en">
  <head>
    <title>He thong thong tin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="../../CSE.css">
     <link rel="stylesheet" href="../../css/logo.css">
  </head>
  <body>
    <form action="" method="post">
        <?php 
            include("../../header.php");
        ?>
            <div class="main ">
                <div class="container  "  >
                    <div class="row ">
                        <div class="col-md-12 gthieu text-white">
                            <h5 >
                                <a href="../../header.php" class="text-white">Bộ môn-Trung tâm</a> > <a href="../bomontrungtam/hethongthongtin.php" class="text-white">Hệ thống thông tin</a> 
                            </h5>
                        </div>
                    </div>
                    <div class="row content">
                        <div class="col-md-9 logo">
                            <div class="col-md-12">
                                <h3><b>Giới thiệu Bộ môn hệ thống thông tin</b></h3>
                                <h6>Bộ môn Hệ thống thông tin đảm nhiệm chức năng giảng dạy tin đại cương, môn tin cơ sở và chuyên ngành Hệ thống thông tin</h6>
                                
                            </div>
                            <div class="col-md-12">
                                <?php 
                                require("../../config.php");
                                $sql = "SELECT * FROM hethongthongtin";
                                mysqli_set_charset($conn,'UTF8');
                                $result = mysqli_query($conn,$sql);
                                // 3. Xu ly ket qua
                                while($row = mysqli_fetch_assoc($result)){ ?>
                                  <!-- <pre style="overflow-x: hidden;"> -->
                                    <b><?php echo $row['position']?> </b>
                                  <!-- </pre>  -->
                                  <div class="col-md-12">
                                    <img src="<?php echo $row['image']?> " alt="" class ="img-fluid">
                                  </div>
                                  
                                <?php 
                                }
                                ?>                                                                
                            </div>
                             <div class="row" style="float: right;">
                                <div class="col-md-12" style="float: right;">
                                    <a href="../bomontrungtam/hethongthongtin.php">Trở về đầu trang</a>
                                </div>
                            </div>
                            <div class="row icon" >
                                <div class="col-md-3" style="margin-right: 4%;">
                                    <a href=""> <button class="text-white" style="background-color: #2e5383; border: 0px;" ><i class="fab fa-facebook-f">Facebook</i></button></a>
                                </div>
                                <div class="col-md-3 " style="margin-right: 1%;">
                                    <a href="" > <button class="bg-primary text-white" style="border: 0px;"><i class="fab fa-twitter">Twitter</i></button></a>
                                </div>
                                <div class="col-md-4">
                                    <a href=""> <button style="background-color: #3161a0; border: 0px;" class="text-white"><i class="fab fa-linkedin-in">LinkIn</i></button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 gioithieu">
                            <div class="col-md-12" style="padding-bottom: 15%;">
                                <h4><a href="../../header.php">Bộ môn-Trung tâm</a></h4>
                             </div>
                            <div class="col-md-12 gioithieu1" >
                                > <a href="../bomontrungtam/congnghephanmem.php" class="gioithieu2">CN phần mềm</a>
                            </div>

                            <div class="col-md-12 gioithieu1">
                                > <a href="../bomontrungtam/hethongthongtin.php" class="gioithieu2">Hệ thống thông tin </a>
                            </div>
                             <div class="col-md-12 gioithieu1">
                            > <a href="../bomontrungtam/khoahocmaytinh.php" class="gioithieu2"> Khoa học máy tính </a>
                            </div>
                            <div class="col-md-12 gioithieu1">
                             > <a href="../bomontrungtam/toanhoc.php" class=gioithieu2>Toán học  </a>
                            </div>
                            <div class="col-md-12 gioithieu1">
                             > <a href="../bomontrungtam/tinhocvakythuattinhtoan.php" class=gioithieu2>Tin học và Kỹ thuật tính toán </a>
                            </div>
                             <div class="col-md-12 gioithieu1">
                             > <a href="../bomontrungtam/trungtamtinhoc.php" class=gioithieu2>Trung tâm tin học</a>
                            </div>
                        
                        </div>
                        </div>
                    </div>
                   
                </div>
               
                            
            </div>
         <footer>
                <div class="container" style="max-width: 960px;">
                  <div class="footer-conten">
                    <div class="footer-top">
                      <div class="it-nav-footer">
                        <ul class="nav-footer-link">
                          <li><a class="ui-link-white" href="../gioithieu/gioithieu.php">Giới thiệu</a></li>
                          <li><a class="ui-link-white" href="../gioithieu/logokhoa.php">Logo của Khoa CNTT</a></li>
                          <li><a class="ui-link-white" href="../gioithieu/loichaomung.php">Lời chào mừng</a></li>
                          <li><a class="ui-link-white" href="../gioithieu/cocautochuc.php">Tổ chức</a></li>
                          <li><a class="ui-link-white" href="../gioithieu/hoptacquocte.php">Hợp tác liên kết</a></li>
                        </ul>
                        <ul class="nav-footer-link">
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/dao-tao">Đào tạo</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/mo-hinh-dao-tao">Mô hình đào tạo</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/dao-tao-dai-hoc-chinh-quy">Đào tạo đại học</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/dao-tao-tien-si">Định hướng ngành nghề</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/dao-tao-sau-dai-hoc">Đào tạo sau đại học</a></li>
                        </ul>
                        <ul class="nav-footer-link">
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe">Nghiên cứu khoa học</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/thong-tin-seminar">Thông tin seminar</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/cac-de-tai-du-an">Các đề tài, dự án</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/cac-cong-trinh-cong-bo">Công trình công bố</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/cac-phong-thi-nghiem">Các phòng thí nghiệm</a></li>
                        </ul>
                        <ul class="nav-footer-link">
                          <li><a class="ui-link-white" href="../bomontrungtam/congnghephanmem.php">Công nghệ phần mềm</a></li>
                          <li><a class="ui-link-white" href="../bomontrungtam/hethongthongtin.php">Hệ thống thông tin</a></li>
                          <li><a class="ui-link-white" href="../bomontrungtam/khoahocmaytinh.php">Khoa học máy tính</a></li>
                          <li><a class="ui-link-white" href="../bomontrungtam/tinhocvakythuattinhtoan.php">Kỹ thuật máy tính và mạng</a></li>
                          <li><a class="ui-link-white" href="../bomontrungtam/toanhoc.php">Toán học</a></li>
                          <li><a class="ui-link-white" href="../bomontrungtam/trungtamtinhoc.php">Trung tâm học</a></li>
                        </ul>
    
                      </div>
                    </div>
                    <div class="footer-bot" >
                      <img src="../../images/footer-img.png" alt="image" class="footer-bot-img">
                      <p>
                        © 2017 Khoa Công nghệ thông tin - Đại học Thủy lợi
                        <br>
                        
                        Địa chỉ: nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội. Điện thoại: (+84)-024 3 5632211. Email: 
                        <a class="ui-link-white"  style="text-decoration: none; color: white;" href="http://cse.tlu.edu.vn/dao-tao/de-cuong-mon-hoc#">vpkcntt@tlu.edu.vn</a>
                      </p>
                    </div>               
                  </div>
                  
                </div>
              </footer>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/3ff58b9e8a.js" crossorigin="anonymous"></script>
    </body>
</html>