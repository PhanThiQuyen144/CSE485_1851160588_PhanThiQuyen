<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="index, follow">
  <title>Admin CSE TLU</title>


<link rel="stylesheet" href="css/template.css" type="text/css">

<!-- Menu head -->
<link href="css/ja.css" rel="stylesheet" type="text/css">
<link href="css/default.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body id="bd" class="wide fs3">

<div id="ja-wrapper">

<!-- BEGIN: HEADER -->
<div id="ja-header" class="clearfix"style="height: 100px;">
	<h1 class="logo">
		<a href="../3.PROJECT/CSE.php">
			<img src="../3.PROJECT/images/logo.jpg" alt="">
		</a>
	</h1>
</div>
<!-- END: HEADER -->

<!-- BEGIN: MAIN NAVIGATION -->
<div id="ja-mainnavwrap">
	<div id="ja-mainnav">
		<ul id="ja-cssmenu" class="clearfix">
			<!-- <li class=""><a href="khoahoc.html" class="menu-item0 first-item" id="menu1" title="Home"><span class="menu-title">QL Khóa học</span></a></li> 
			<li class=""><a href="dangki.html" class="menu-item1" id="menu82" title="Job Board Features"><span class="menu-title">QL Đăng ký</span></a></li> 
			<li class=""><a href="dshocvien.html" class="menu-item2" id="menu83" title="FAQs"><span class="menu-title">QL Học viên</span></a></li> 
			<li class=""><a href="lapdanhsachthi.html" class="menu-item3" id="menu85" title="Forums"><span class="menu-title">QL Thi</span></a></li> -->
			<li class="active"><a href="report.php" id="menu86" title="Documentation (Beta)"><span class="menu-title">Đăng bài</span></a></li>  
			<li class="active"><a href="hethong.php"  class="active" id="menu86" title="Documentation (Beta)"><span class="menu-title">Hệ thống</span></a></li> 
			<li class=""><a href="#" id="menu86" title="Documentation (Beta)"><span class="menu-title">Đăng xuất</span></a></li> 
		</ul>
	</div>

	<div id="ja-search">
		<form action="CSE.php" method="post">
		<div class="search">
			<input name="searchword" id="mod_search_searchword" maxlength="20" alt="Search" class="inputbox" size="20" value="search..." onblur="if(this.value=='') this.value='search...';" onfocus="if(this.value=='search...') this.value='';" type="text">	</div>
		<input name="task" value="search" type="hidden">
		<input name="option" value="com_search" type="hidden">
		</form>
	</div>
	
</div>

<!-- END: MAIN NAVIGATION -->



<div id="ja-containerwrap-fr">
<div id="ja-container">
<div id="ja-container2" class="clearfix">

<div id="ja-mainbody" class="clearfix">

<!-- BEGIN: CONTENT -->
	<div class="title-module">QUẢN TRỊ BÀI VIẾT</div>
	<div class="list-course">
		<table class="list-course">
			<tr class="row-first">													
							<td width="200">Tên đăng nhập</td>
							<td width="150">Module</td>													
							<td width="70">Xem</td>
							<td width="70">Thêm</td>
							<td width="70">Sửa</td>	
							<td width="70"> Xóa </td>							
						</tr>
							
                             <?php 
                                require("connect.php");
                                $sql = "SELECT * FROM cse";
                                mysqli_set_charset($dbcon,'UTF8');
                                $result = mysqli_query($dbcon,$sql);
                                // 3. Xu ly ket qua
                                while($row = mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                    <td><?php echo $row['username'] ?> </td>
							        <td> Đào tạo </td>
							        <td><a href="include/daotao/index_daotao.php"><i class="fa fa-street-view" aria-hidden="true"></i>Xem</a></td>
							        <td><a href="include/daotao/create_daotao.php"> <i class="fas fa-calendar-plus"></i>Thêm </a></td>
							         <td><a href="include/daotao/index_daotao.php"><i class="far fa-edit"></i> Sửa</a></td>
							        <td><a href="include/daotao/index_daotao.php"><i class="fas fa-trash-alt"></i>Xóa </a></td>
                                </tr>
                                 <!-- <tr>
                                    <td> </td>
							        <td> cse2 </td>
							        <td><a href="index_cse2.php"><i class="fa fa-street-view" aria-hidden="true"></i>Xem</a></td>
							        <td><a href="delete_cse2.php"> <i class="fas fa-calendar-plus"></i>Thêm </a></td>
							        <td><a href="index_cse2.php"><i class="far fa-edit"></i> Sửa</a></td>
							        <td><a href="index_cse2.php"><i class="fas fa-trash-alt"></i>Xóa </a></td>
                                </tr> -->
                            
					
                                
                            <?php 
                                }
                            ?>						
							
						
						<tr>							
							
		</table>
	</div>
			
	<div class="task">					
					<a href="#"><input type="button" name="Cập nhật" value="Cập nhật"></a>
	</div>
			  
<!-- END: CONTENT -->
 		
</div>
		
<!-- BEGIN: LEFT COLUMN -->
<div id="ja-col1">
	<div class="moduletable_menu">
		<h3>Main Menu</h3>
			<ul class="menu">
			<!-- <li id="current" class=" item1"><a href="../3.PROJECT/hethong.php">Quản trị người sử dụng</a></li> -->
			<li class="item82"><a href="report.php">QL đăng bài</a></li>
			<li class="item83"><a href="reportdt.php">QL đào tạo</a></li>
			<li class="item85"><a href="reporttb.php">QL thông báo</a></li>		
			<li class=" item1"><a href="report_bomon.php">Bộ môn - trung tâm</a></li>	
			<li class=" item1"><a href="report_giangvien.php">QL Giảng viên</a></li>
			<li class=" item1"><a href="report_gioithieu.php">Giới thiệu</a></li>		
			</ul>		
	</div>
</div>

<!-- END: LEFT COLUMN -->
	
</div></div></div>


<!-- BEGIN: FOOTER -->
<div id="ja-footer" class="clearfix">

	
	<small>Copyright © 2009 TTTH Ứng dụng - Khoa CNTT. Designed by 
<a href="#" title="Visit Joomlart.com!" target="blank">TTTH</a>.</small>
<!--<small><a href="http://www.joomla.org">Joomla!</a> is Free Software released under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU/GPL License.</a></small> -->


</div>
<!-- END: FOOTER -->

</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/3ff58b9e8a.js" crossorigin="anonymous"></script>
	 <script src="../3.PROJECT/js/login.js"></script>
</body>
</html>
