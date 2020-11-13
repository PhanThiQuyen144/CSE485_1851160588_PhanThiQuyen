<!doctype html>
<html lang="en">
  <head>
    <title>Đào tạo</title>
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
            // include("../../../3.PROJECT/header.php");
        ?>
         <div class="row text-white globalnav fixed-top" style="background-color: #003478; margin: 0px; float: right;">
                
                <!-- bar responsive -->
                <div id="respon-bar">
                    <i class="fas fa-bars" id="bars1" style="position: absolute; top: 3px; left: 7px;"></i>     
                </div>               
 
                <div class="label" >
                    <a href="http://www.tlu.edu.vn/" class="text-white hide-on">Trường Đại học Thủy Lợi -TLU</a>
                </div>
                <div class=" list-top " style="display: flex;">
                    <ul style="display: flex;">
                        <li>(+)</li>
                        <li>|</li>
                        <li> 
                            <a href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/Login.php" class="text-white"> Login</a>
                        </li>
                        <li>|</li>
                        <li>
                            <a href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/register.php" class="text-white"> Register</a>
                        </li>
                        <li>|</li>
                        
                        <li>
                            Ngôn ngữ:
                           <a href="http://cse.tlu.edu.vn/#"><img src="http://cse.tlu.edu.vn/cse/assets/images/icons/icon-lang-vi.png" alt=""></a> 
                           <a href="http://cse.tlu.edu.vn/#"><img src="http://cse.tlu.edu.vn/cse/assets/images/icons/icon-lang-en.png" alt=""> </a> 
                        </li>
                    </ul>
                </div>
                <div class="search " >
                    <input type="text" value="" placeholder="Tìm kiếm" class="fa-search hide-on "id="inputsearch " style="margin-left: 5%;" >
                  
                    <div class="search-icon" ><a href="http://cse.tlu.edu.vn/chi-tiet/s" id="search-link"><i class="fa fa-search text-secondary iconsearch" style="cursor: pointer;" aria-hidden="true"></i></a>  </div>
                   
                </div>
                <!-- search mobile -->
                <div  id="search1" class="hide" style="margin-left: 10px;padding-top: 3px;">
                    <i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i>
                </div>
                <!-- search mobile -->
                <div class="search-mobile">
                    <div class="btn-close " >
                        <a href="#" class="hide"><i class="fas fa-times"></i></a>
                        
                    </div>
                    <div class="search-frame hide">
                        <input type="text" placeholder="Tìm kiếm" class="hide">
                        <a href="http://cse.tlu.edu.vn/chi-tiet/s"class="hide"><i class="fa fa-search text-secondary" aria-hidden="true" style="cursor: pointer;"></i></a>
                        
                    </div>                 
                </div>
            </div>
            <div class="header" style="border-bottom: 1px solid rgb(183, 183, 211);" >
                <div class="container" >
                    <div class="header_logo " >
                        <h1>
                            <a href="http://cse.tlu.edu.vn/" >
                                <img src="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/images/logo.jpg" alt="" width="547px"class="img-fluid" height="82px">
                            </a>
                        </h1>
                    </div> 
                    <div class="title  ">
                       <nav class="navbar navbar-expand-sm navbar-light navbar1" style=" padding: 0px !important;" >
                           <div class="collapse navbar-collapse" id="collapsibleNavId">
                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                   <li class="nav-item dropdown ">
                                        <a class="homesp navbar-brand" href="CSE.php">TRANG CHỦ</a>
                                   </li>
                               </ul>
                           </div>
                           
                           <!-- <button class="d-md-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                               aria-expanded="false" aria-label="Toggle navigation"></button> -->
                           <div class="collapse navbar-collapse" id="collapsibleNavId">
                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item dropdown">
                                       <a class="navbar-brand has-sub has-sub1" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/gioithieu/gioithieu.php" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       GIỚI THIỆU</a>
                                       <div class="dropdown-menu nav-sub nav-sub1 " aria-labelledby="dropdownId">
                                           <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/gioithieu/logokhoa.php">Logo khoa CNTT</a>
                                           <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/gioithieu/loichaomung.php">Lời chào mừng</a>
                                           <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/gioithieu/cocautochuc.php">Tổ chức</a>
                                           <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/gioithieu/hoptacquocte.php">Hợp tác liên kết</a>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                           <div class="collapse navbar-collapse" id="collapsibleNavId">
                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item dropdown ">
                                       <a class="navbar-brand has-sub has-sub2" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/nghiencuukhoahoc/nghien_cuu_khoa_hoc.php" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NGHIÊN CỨU KHOA HỌC</a>
                                       <div class="dropdown-menu nav-sub nav-sub2" aria-labelledby="dropdownId">
                                           <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/nghiencuukhoahoc/nghien_cuu_khoa_hoc.php">Các đề tài, dự án</a>
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/thong-tin-seminar">Thông tin seminar</a>
                                            <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/cac-cong-trinh-cong-bo">Công trình công bố</a>
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/cac-phong-thi-nghiem">Phòng thí nghiệm</a>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                           <div class="collapse navbar-collapse" id="collapsibleNavId">
                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item dropdown">
                                       <a class="navbar-brand has-sub has-sub3" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/daotao/daotao.php" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ĐÀO TẠO</a>
                                       <div class="dropdown-menu nav-sub nav-sub3" aria-labelledby="dropdownId">
                                           <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/daotao/daotao.php">Đào tạo đại học</a>
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/dao-tao-sau-dai-hoc">Đào tạo sau đại họcg</a>
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/%c4%90%c3%a0o-t%e1%ba%a1o/Chu%e1%ba%a9n-%c4%91%e1%ba%a7u-ra">Chuẩn đầu ra</a>
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/dao-tao-tien-si">Định hướng ngành nghề</a>
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/mo-hinh-dao-tao">Mô hình đào tạo</a>
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/dao-tao/de-cuong-mon-hoc">Đề cương môn học</a>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                           <div class="collapse navbar-collapse" id="collapsibleNavId">
                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item dropdown">
                                       <a class="navbar-brand has-sub has-sub4" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/bomontrungtam/giangvien.php" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BỘ MÔN-TRUNG TÂM</a>
                                       <div class="dropdown-menu nav-sub nav-sub4" aria-labelledby="dropdownId">
                                           <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/bomontrungtam/congnghephanmem.php">CN phần mềm</a>
                                           <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/bomontrungtam/hethongthongtin.php">Hệ thống thông tin</a>
                                           <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/bomontrungtam/khoahocmaytinh.php">Khoa học máy tính</a>
                                           <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/bomontrungtam/tinhocvakythuattinhtoan.php">Kỹ thuật máy tính và mạng</a>
                                           <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/bomontrungtam/toanhoc.php">Toán học</a>
                                           <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/bomontrungtam/trungtamtinhoc.php">
                                            Trung tâm tin học
                                        </a>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                            <div class="collapse navbar-collapse" id="collapsibleNavId">
                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item dropdown">
                                       <a class="navbar-brand has-sub has-sub5" href="http://cse.tlu.edu.vn/sinh-vien" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SINH VIÊN</a>
                                       <div class="dropdown-menu nav-sub nav-sub5" aria-labelledby="dropdownId">
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/tai-lieu-sinh-vien">Tài liệu sinh viên</a>
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/to-tu-van-hoc-tap">Tổ tư vấn học tập</a>
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/Sinh-vi%c3%aan/Bi%e1%bb%83u-m%e1%ba%abu-%c4%90ATN">Biểu mẫu ĐATN</a>
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/Sinh-vi%c3%aan/Lu%e1%ba%adn-v%c4%83n-t%e1%bb%91t-nghi%e1%bb%87p">Luận văn tốt nghiệp</a>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                           <div class="collapse navbar-collapse" id="collapsibleNavId1">
                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item dropdown">
                                       <a class="navbar-brand has-sub has-sub6" href="http://cse.tlu.edu.vn/tin-tuc-thong-bao" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TIN TỨC</a>
                                       <div class="dropdown-menu nav-sub nav-sub6" aria-labelledby="dropdownId">
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/su-kien">Sự kiện</a>
                                           <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/cse-tren-bao">CSE trên báo</a>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                           <div class="collapse navbar-collapse" id="collapsibleNavId2">
                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item dropdown">
                                       <a class="navbar-brand has-sub has-sub7" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/thongbao/thongbao.php" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">THÔNG BÁO</a>
                                       <div class="dropdown-menu nav-sub nav-sub7" aria-labelledby="dropdownId">
                                            <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/thongbao/thongbao.php">Thông báo</a>
                                            <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/thong-bao-dao-tao">TB Đào tạo</a>
                                            <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/thong-bao-nghien-cuu-khoa-hoc">Nghiên cứu khoa học</a>
                                            <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/tuyen-dung">Tuyển dụng</a>
                                            <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/thong-bao-hoc-bong">Học bổng</a>
                                            <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/thong-bao-khac">Thông báo khác</a>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                           <div class="collapse navbar-collapse" id="collapsibleNavId2">
                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item dropdown">
                                       <a class="navbar-brand has-sub" href="http://cse.tlu.edu.vn/lien-he" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LIÊN HỆ</a>
                                       
                                   </li>
                               </ul>
                           </div>
                       </nav>
                       <!-- sdkjhsfkj -->
                       <nav class="navbar navbar-expand-sm navbar-light navbar1" style=" padding: 0px !important;display: none;" >
                           <div style=" padding: 0px !important; margin: 0px auto !important;" >
                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item dropdown">
                                       <a class="navbar-brand has-sub has-sub7" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/thongbao/thongbao.php" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">THÔNG BÁO</a>
                                       <div class="dropdown-menu nav-sub nav-sub7" aria-labelledby="dropdownId">
                                            <a class="dropdown-item text-white" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/thongbao/thongbao.php">Thông báo</a>
                                            <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/thong-bao-dao-tao">TB Đào tạo</a>
                                            <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/thong-bao-nghien-cuu-khoa-hoc">Nghiên cứu khoa học</a>
                                            <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/tuyen-dung">Tuyển dụng</a>
                                            <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/thong-bao-hoc-bong">Học bổng</a>
                                            <a class="dropdown-item text-white" href="http://cse.tlu.edu.vn/thong-bao-khac">Thông báo khác</a>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                           <div class="collapse navbar-collapse" id="collapsibleNavId3">
                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item dropdown">
                                       <a class="navbar-brand has-sub" href="http://cse.tlu.edu.vn/lien-he" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LIÊN HỆ</a>
                                       
                                   </li>
                               </ul>
                           </div>
                       </nav>
                       <!-- hgjkdhwekjr -->
                    </div>
                    <!--navbar-mobile  -->
                 <!-- <div class="nav-overlay">

                </div> -->
                <nav class="navbar-mobile fixed-top">
                    <div class="nav-mobile-close">
                        <i class="fas fa-times" style="position: absolute; top: 3px; left: 7px;"></i>
                      </div>
                    <ul class="list-nav-mobile">
                        <li ><a href="" class="nav-link-mobile">TRANG CHỦ</a></li>
                        <li><a href=""class="nav-link-mobile">GIỚI THIỆU</a>
                            <ul class="list-sub-mobile">
                                <li><a href="  http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/gioithieu/logokhoa.php" class="sub-link-mobile">Logo khoa CNTT</a></li>
                                <li><a href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/gioithieu/loichoamung.php"class="sub-link-mobile">Lời chào mừng</a></li>
                                <li><a href=" http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/gioithieu/cocautochuc.php"class="sub-link-mobile">Tổ chức</a></li>
                                <li><a href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/gioithieu/hoptacquocte.php"class="sub-link-mobile">Hợp tác liên kết</a></li>
                              </ul></li>
                        <li><a href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/nghiencuukhoahoc/nghien_cuu_khoa_hoc.php"class="nav-link-mobile">NGHIÊN CỨU KHOA HỌC</a>
                            <ul class="list-sub-mobile">
                                <li><a href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/nghiencuukhoahoc/nghien_cuu_khoa_hoc.php"class="sub-link-mobile">Các đề tài, dự án</a></li>
                                <li><a href="http://cse.tlu.edu.vn/thong-tin-seminar"class="sub-link-mobile">Thông tin seminar</a></li>
                                <li><a href="http://cse.tlu.edu.vn/cac-cong-trinh-cong-bo"class="sub-link-mobile">Công trình công bố</a></li>
                                <li><a href="http://cse.tlu.edu.vn/cac-phong-thi-nghiem"class="sub-link-mobile">Phòng thí nghiệm</a></li>
                              </ul>
                        </li>
                        <li><a href=""class="nav-link-mobile">ĐÀO TẠO</a>
                            <ul class="list-sub-mobile">
                                <li><a href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/include/daotao/daotao.php"class="sub-link-mobile">Đào tạo đại học</a></li>
                                <li><a href="http://cse.tlu.edu.vn/dao-tao-sau-dai-hoc"class="sub-link-mobile">Đào tạo sau đại học</a></li>
                                <li><a href="http://cse.tlu.edu.vn/%c4%90%c3%a0o-t%e1%ba%a1o/Chu%e1%ba%a9n-%c4%91%e1%ba%a7u-ra"class="sub-link-mobile">Chuẩn đầu ra</a></li>
                                <li><a href="http://cse.tlu.edu.vn/dao-tao-tien-si"class="sub-link-mobile">Định hướng ngành nghề</a></li>
                                <li><a href="http://cse.tlu.edu.vn/mo-hinh-dao-tao"class="sub-link-mobile">Mô hình đào tạo</a></li>
                                <li><a href="http://cse.tlu.edu.vn/dao-tao/de-cuong-mon-hoc"class="sub-link-mobile">Đề cương môn học</a></li>
                              </ul></li>
                        <li><a href=""class="nav-link-mobile">BỘ MÔN-TRUNG TÂM</a>
                            <ul class="list-sub-mobile">
                                <li><a href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/bomongtrungtam/congnghephanmem.php"class="sub-link-mobile">CN phần mềm</a></li>
                                <li><a href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/bomongtrungtam/hethongthongtin.php"class="sub-link-mobile">Hệ thống thông tin</a></li>
                                <li><a href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/bomongtrungtam/khoahocmaytinh.php"class="sub-link-mobile">Khoa học máy tính</a></li>
                                <li><a href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/bomontrungtam/tinhocvakythuattinhtoan.php"class="sub-link-mobile">Kỹ thuật máy tính và mạng toán học</a></li>
                                <li><a href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/bomongtrungtam/trungtamtinhoc.php"class="sub-link-mobile">Trung tâm tin học</a></li>
                              </ul></li>
                        <!-- <li><a href=""class="nav-link-mobile">SINH VIÊN</a>
                            <ul class="list-sub-mobile">
                                <li><a href="#"class="sub-link-mobile">Tài liệu sinh viên</a></li>
                                <li><a href="#"class="sub-link-mobile">Tổ tư vấn học tập</a></li>
                                <li><a href="#"class="sub-link-mobile">Biểu mẫu ĐATN</a></li>
                                <li><a href="#"class="sub-link-mobile">Luận văn tốt nghiệp</a></li>
                              </ul></li>
                        <li><a href=""class="nav-link-mobile">TIN TỨC</a>
                            <ul class="list-sub-mobile">
                                <li><a href="#"class="sub-link-mobile">Sự kiện</a></li>
                                <li><a href="#"class="sub-link-mobile">CSE trên báo</a></li>
                                
                              </ul></li>
                        <li><a href=""class="nav-link-mobile">THÔNG BÁO</a>
                            <ul class="list-sub-mobile">
                                <li><a href="#"class="sub-link-mobile">Thông báo</a></li>
                                <li><a href="#"class="sub-link-mobile">TB Đào tạo</a></li>
                                <li><a href="#"class="sub-link-mobile">Nghiên cứu khoa học</a></li>
                                <li><a href="#"class="sub-link-mobile">Tuyển dụng</a></li>
                                <li><a href="#"class="sub-link-mobile">Học bổng</a></li>
                                <li><a href="#"class="sub-link-mobile">Tuyển dụng khác</a></li>
                              </ul></li>
                        <li><a href=""class="nav-link-mobile">LIÊN HỆ</a></li> -->
                        
                    </ul>
                </nav>
                    
                </div>
                <!-- <hr style="border-color: rgb(183, 183, 211);"> -->
            </div>
        <div class="main ">
          <div class="container  "  >
            <div class="row content">
              <div class="col-md-9 logo">
              <h1 style="font-size: 34px; line-height: 2; font-family: Calibri;"><b>ĐÀO TẠO</b> </h1>
                        <div class="row">
                        <?php 
                        // PHẦN XỬ LÝ PHP
                        // BƯỚC 1: KẾT NỐI CSDL
                        $conn = mysqli_connect('localhost', 'root', '', 'project');
                
                        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
                        $result = mysqli_query($conn, 'select count(id) as total from daotao');
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
                        $result = mysqli_query($conn, "SELECT * FROM daotao LIMIT $start, $limit");
                
                        ?>
                        <div style=" margin-right: 50px;">
                            <?php 
                            // PHẦN HIỂN THỊ TIN TỨC
                            // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                <div class="row">
                                <div class="col-md-4" style=" ">
                                  <img style="width: 150px;height: 100px;" src="<?php echo $row['img'] ?>" alt="" class="img-fluid pt-2">
                                </div>
                                <div class="col-md-8 pt-2" style=" font-size:14px">
                                  <a href="<?php echo $row['content'] ?> " style="text-decoration: none;list-style: none;font-family: 'Roboto Condensed', sans-serif;font-size:24px;color: #003478 ;"> <?php echo $row['name'] ?></a> 
                                  <p><?php echo $row['description'] ?></p>   
                                  <a href="<?php echo $row['content'] ?> " style="text-decoration: none;display: block;float: right;">>Xem chi tiết</a>
                                                  
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
                              echo '<a href="daotao.php?page='.($current_page-1).'">Prev</a> | ';
                          }
              
                          // Lặp khoảng giữa
                          for ($i = 1; $i <= $total_page; $i++){
                              // Nếu là trang hiện tại thì hiển thị thẻ span
                              // ngược lại hiển thị thẻ a
                              if ($i == $current_page){
                                  echo '<span>'.$i.'</span> | ';
                              }
                              else{
                                  echo '<a href="daotao.php?page='.$i.'">'.$i.'</a> | ';
                              }
                          }
              
                          // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                          if ($current_page < $total_page && $total_page > 1){
                              echo '<a href="daotao.php?page='.($current_page+1).'">Next</a> | ';
                          }
                        ?>
                      </div>
                        </div>
                        
                        </div>
              </div> 
              <div class="col-md-3 gioithieu">
              <div class="tlu-menu">
                          <p style="font-size: 30px; line-height: 2; font-family: Calibri;"><a href="" style="list-style: none;text-decoration: none;">Đào tạo</a></p>
                          <div class="menu">
                            <ul class="hihi">
                              <li><a href="">> Đào tạo đại học</a></li>
                              <li><a href="">> Đào tạo sau đại học</a></li>
                              <li><a href="">> Chuẩn đầu ra</a></li>
                              <li><a href="">> Định hướng ngành nghề</a></li>
                              <li><a href="">> Mô hình đào tạo</a></li>
                              <li><a href="">> Đề cương môn học</a></li>
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
 


 