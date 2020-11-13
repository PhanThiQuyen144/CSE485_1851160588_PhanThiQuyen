<!doctype html>
<html lang="en">
  <head>
    <title>Nghiên cứu khoa học</title>
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
              <h1 style="font-size: 34px; line-height: 2; font-family: Calibri;"><b>Các hướng nghiên cứu Công nghệ thông tin</b> </h1>
                        <?php
                            require("../../config.php");
                            $sql = "SELECT * FROM ngckh";
                            mysqli_set_charset($conn,'UTF8');
                            $result = mysqli_query($conn,$sql);
                            // 3. Xu ly ket qua
                            while($row = mysqli_fetch_assoc($result)){?>
                            <p style="color=#000000 font-size: 30px;" ><strong style=" font-size: 18px;"><?php echo $row['name'] ?></strong> </p>
                            <ul><li>
                            <?php
                            
                            ?>
                            </li></ul>
                        <?php
                            }
                        ?>


                        <div class="TLU clearfix" >
                          <a href="#" ><span class="toppage"><u>Trở về đầu trang</u></span></a>
                        </div>
                        <div class="tag-link">
                          <i class="fa fa-tag" aria-hidden="true"></i>
                        </div>
                        <div class="icon" style=" border-radius: 2px;"><span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                        <button type="button" class="btn btn-primary"><a href="https://www.facebook.com/dialog/share?app_id=140586622674265&display=popup&href=http%3A%2F%2Fcse.tlu.edu.vn%2Fkhoa-hoc-cong-nghe%23.X3vegsNNID8.facebook&redirect_uri=http%3A%2F%2Fs7.addthis.com%2Fstatic%2Fthankyou.html" style="color:white;list-style: none;text-decoration: none;"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></button>
                        <button type="button" class="btn btn-secondary"><a href="https://twitter.com/intent/tweet?text=C%C3%A1c%20h%C6%B0%E1%BB%9Bng%20nghi%C3%AAn%20c%E1%BB%A9u%20C%C3%B4ng%20ngh%E1%BB%87%20th%C3%B4ng%20tin&url=http%3A%2F%2Fcse.tlu.edu.vn%2Fkhoa-hoc-cong-nghe%23.X3vfV2ph89o.twitter&related="tyle="color:white;list-style: none;text-decoration: none;"></a><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</button>
                        <button type="button" class="btn btn-info"><a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2FshareArticle%3Fmini%3Dtrue%26url%3Dhttp%253A%252F%252Fcse.tlu.edu.vn%252Fkhoa-hoc-cong-nghe%2523.X3veq-CYyls.linkedin%26title%3DC%25C3%25A1c%2Bh%25C6%25B0%25E1%25BB%259Bng%2Bnghi%25C3%25AAn%2Bc%25E1%25BB%25A9u%2BC%25C3%25B4ng%2Bngh%25E1%25BB%2587%2Bth%25C3%25B4ng%2Btin%26ro%3Dfalse%26summary%3D%26source%3D"tyle="color:white;list-style: none;text-decoration: none;"></a> <i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</button>
                          <!-- <a href="" role="button" class="icon-1"  style="margin-left: 20px;background-color: rgb(59, 89, 152); border-radius: 2px;width: 20px;height: 20px;"><span class="at-icon-wrapper" style="margin-top: 50px;line-height: 16px; height: 16px; width: 16px;"><i style="margin-top: 50px;" class="fab fa-facebook-square"></i></span></a>
                          <a href="" role="button" class="icon-1" style="margin-left: 20px;background-color: rgb(59, 89, 152); border-radius: 2px;width: 20px;height: 20px;"><i class="fab fa-twitter"></i></a>
                          <a href="" role="button" class="icon-1" style="margin-left: 20px;background-color: rgb(59, 89, 152); border-radius: 2px;width: 20px;height: 20px;"><i class="fab fa-invision"></i></a> -->
                        </div>
                      
              </div> 
              <div class="col-md-3 gioithieu">
              <div class="tlu-menu">
                          <p style="font-size: 30px; line-height: 2; font-family: Calibri;"><a href="" style="list-style: none;text-decoration: none;">Nghiên cứu khoa học</a></p>
                          <div class="menu">
                            <ul class="hihi">
                              <li><a href="">> Các đề tài dự án</a></li>
                              <li><a href="">> Thông tin Seminar</a></li>
                              <li><a href="">> Công trình công bố</a></li>
                              <li><a href="">> Các phòng thí nghiệm</a></li>
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
 


 