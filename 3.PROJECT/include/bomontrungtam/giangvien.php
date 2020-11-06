<!doctype html>
<html lang="en">
  <head>
    <title>Giảng viên</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" >
     <link rel="stylesheet" href="../../CSE.css">
     <link rel="stylesheet" href="../../css/logo.css">
    
  </head>
  
  <body >
    <form action="" method="post">
        <?php 
            include("../../header.php");
        ?>
        <div class="main ">
          <div class="container  "  >
            <div class="row content">
              <div class="col-md-9 logo">
                <div class="row">
                                  <!-- <div class="col-md-12 giangvien bg-dark"> -->
                  <?php
                    require("../../config.php");
                      $sql = "SELECT * FROM giangvien";
                      mysqli_set_charset($conn,'UTF8');
                      $result = mysqli_query($conn,$sql);
                      // 3. Xu ly ket qua
                      while($row = mysqli_fetch_assoc($result)){ ?>
                        <div class="col-md-2 "style=" border-bottom:  1px dotted #808080;">
                          <img src="<?php echo $row['iamge'] ?>" alt="" class="img-fluid pt-2">
                        </div>
                        <div class="col-md-5  pt-2"style=" border-bottom:  1px dotted #808080;font-size:14px">
                          <a href="<?php echo $row['infor'] ?> "> <?php echo $row['username'] ?></a>    
                          <pre  style="overflow-x: hidden;">
                            <?php echo $row['name'] ?>
                          </pre>
                          </div>
                          <div class="col-md-5 " style=" border-bottom:  1px dotted #808080;font-size:15px">
                            <pre style="overflow-x: hidden;">
                              <?php echo $row['content'] ?>
                            </pre>
                           </div>
                      <?php               
                        }
                      ?>
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
                          <li><a class="ui-link-white" href="../3.PROJECT/gioithieu.html">Giới thiệu</a></li>
                          <li><a class="ui-link-white" href="../3.PROJECT/logokhoa.html">Logo của Khoa CNTT</a></li>
                          <li><a class="ui-link-white" href="../3.PROJECT/loichaomung.html">Lời chào mừng</a></li>
                          <li><a class="ui-link-white" href="../3.PROJECT/cocautochuc.html">Tổ chức</a></li>
                          <li><a class="ui-link-white" href="../3.PROJECT/hoptacquocte.html">Hợp tác liên kết</a></li>
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
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/cong-nghe-phan-mem">Công nghệ phần mềm</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/he-thong-thong-tin">Hệ thống thông tin</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/khoa-hoc-may-tinh">Khoa học máy tính</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/ky-thuat-may-tinh-va-mang">Kỹ thuật máy tính và mạng</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/bo-mon-toan-hoc">Toán học</a></li>
                          <li><a class="ui-link-white" href="http://cse.tlu.edu.vn/trung-tam-tin-hoc">Trung tâm học</a></li>
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
    <script src="../../CSE.js" ></script>
    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js" ></script>
    <script src="../../js/bootstrap.min.js"></script>
    </body>
</html>
 


 