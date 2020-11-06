<!doctype html>
<html lang="en">
  <head>
    <title>Thông báo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" >
     <link rel="stylesheet" href="../../CSE.css">
     <!-- <link rel="stylesheet" href="../../css/logo.css"> -->
     <link rel="stylesheet" href="../../css/menu_con.css">
    
  </head>
  
  <body >
    <form action="" method="post">
        <?php 
            include("../../../3.PROJECT/header.php");
        ?>
        <div class="main ">
          <div class="container  "  >
            <div class="row content">
              <div class="col-md-9 logo">
              <h1 style="font-size: 34px; line-height: 2; font-family: Calibri;"><b>THÔNG BÁO</b> </h1>
                        <div class="row">
                        <?php 
                        // PHẦN XỬ LÝ PHP
                        // BƯỚC 1: KẾT NỐI CSDL
                        $conn = mysqli_connect('localhost', 'root', '', 'project');
                
                        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
                        $result = mysqli_query($conn, 'select count(id) as total from thongbao');
                        $row = mysqli_fetch_assoc($result);
                        $total_records = $row['total'];
                
                        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
                        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $limit = 5;
                
                        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
                        // tổng số trang
                        $total_page = ceil($total_records / $limit);
                
                        // Giới hạn current_page trong khoảng 1 đến total_page
                        if ($current_page > $total_page){
                            $current_page = $total_page;
                        }
                        else if ($current_page < 1){
                            $current_page = 1;
                        }
                
                        // Tìm Start
                        $start = ($current_page - 1) * $limit;
                
                        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
                        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
                        $result = mysqli_query($conn, "SELECT * FROM thongbao LIMIT $start, $limit");
                
                        ?>
                        <div style=" margin-right: 50px;">
                            <?php 
                            // PHẦN HIỂN THỊ TIN TỨC
                            // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <div class="row" style="margin-bottom: 30px">
                                <div class="col-md-4" style=" ">
                                  <img style="width: 150px;height: 100px;" src="<?php echo $row['img'] ?>" alt="" class="img-fluid pt-2">
                                </div>
                                <div class="col-md-8 pt-2" style=" font-size:14px">
                                  <a href="<?php echo $row['content'] ?> " style="text-decoration: none;list-style: none;font-family: 'Roboto Condensed', sans-serif;font-size:24px;color: #003478 ;"> <?php echo $row['name'] ?></a> 
                                  
                                  <a href="<?php echo $row['content'] ?> " style="text-decoration: none;display: block;float: right;margin-top: 40px">>Xem chi tiết</a>
                                                  
                                </div>
                                </div>
                                                  
                                <?php               
                                }
                                ?>
                            <div class="pagination" style="display: block;float: right; margin-top: 30px">
                        
                        <?php 
                          // PHẦN HIỂN THỊ PHÂN TRANG
                          // BƯỚC 7: HIỂN THỊ PHÂN TRANG
              
                          // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                          if ($current_page > 1 && $total_page > 1){
                              echo '<a href="thongbao.php?page='.($current_page-1).'">Prev</a> | ';
                          }
              
                          // Lặp khoảng giữa
                          for ($i = 1; $i <= $total_page; $i++){
                              // Nếu là trang hiện tại thì hiển thị thẻ span
                              // ngược lại hiển thị thẻ a
                              if ($i == $current_page){
                                  echo '<span>'.$i.'</span> | ';
                              }
                              else{
                                  echo '<a href="thongbao.php?page='.$i.'">'.$i.'</a> | ';
                              }
                          }
              
                          // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                          if ($current_page < $total_page && $total_page > 1){
                              echo '<a href="thongbao.php?page='.($current_page+1).'">Next</a> | ';
                          }
                        ?>
                      </div>
                        </div>
                        
                        </div>
                        
                      
              </div> 
              <div class="col-md-3 gioithieu">
              <div class="tlu-menu">
                          <p style="font-size: 30px; line-height: 2; font-family: Calibri;"><a href="" style="list-style: none;text-decoration: none;">Thông báo</a></p>
                          <div class="menu">
                            <ul class="hihi">
                              <li><a href="">> Thông báo</a></li>
                              <li><a href="">> TB đào tạo</a></li>
                              <li><a href="">> Nghiên cứu khoa học</a></li>
                              <li><a href="">> Tuyển dụng</a></li>
                              <li><a href="">> Học bổng</a></li>
                              <li><a href="">> Thông báo khác</a></li>
                            </ul>
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
    <script src="https://kit.fontawesome.com/3ff58b9e8a.js" crossorigin="anonymous"></script>
    </body>
</html>
 


 