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
		<a href="CSE.html">
			<img src="admin/images/logo.jpg" alt="">
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
			<li class=""><a href="lapdanhsachthi.html" class="menu-item3" id="menu85" title="Forums"><span class="menu-title">QL Thi</span></a></li> 
			<li class=""><a href="thongke.html" id="menu86" title="Documentation (Beta)"><span class="menu-title">Thống kê</span></a></li>  -->
			<li class="active"><a href="hethong.html"  class="active" id="menu86" title="Documentation (Beta)"><span class="menu-title">Hệ thống</span></a></li> 
			<li class=""><a href="#" id="menu86" title="Documentation (Beta)"><span class="menu-title">Đăng xuất</span></a></li> 
		</ul>
	</div>

	<div id="ja-search">
		<form action="index.php" method="post">
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
	<div class="title-module">PHÂN QUYỀN NGƯỜI SỬ DỤNG</div>
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
						<tr>							
							<td>admin</td>
							<td>Quản lý nghiên cứu KH</td>
							<td><input type="checkbox" checked="checked"></td>
							<td><input type="checkbox" checked="checked"></td>
							<td><input type="checkbox" checked="checked"></td>
							<td><input type="checkbox" checked="checked"></td>
						</tr>
						<tr>							
							<td>admin</td>
							<td>Quản lý đào tạo</td>
							<td><input type="checkbox" checked="checked"></td>
							<td><input type="checkbox" checked="checked"></td>
							<td><input type="checkbox" checked="checked"></td>
							<td><input type="checkbox" checked="checked"></td>
						</tr>
						<tr>							
							<td>admin</td>
							<td>Quản lý sinh viên</td>
							<td><input type="checkbox" checked="checked"></td>
							<td><input type="checkbox" checked="checked"></td>
							<td><input type="checkbox" checked="checked"></td>
							<td><input type="checkbox" checked="checked"></td>
						</tr>
						<tr>							
							<td>hanhnt</td>
							<td>Quản lý tin tức</td>
							<td><input type="checkbox"></td>
							<td><input type="checkbox"></td>
							<td><input type="checkbox"></td>
							<td><input type="checkbox"></td>
						</tr>
						<tr>							
							<td>hanhnt</td>
							<td>Quản lý thông báo</td>
							<td><input type="checkbox" checked="checked"></td>
							<td><input type="checkbox" ></td>
							<td><input type="checkbox" ></td>
							<td><input type="checkbox" ></td>
						</tr>
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
			<li id="current" class=" item1"><a href="hethong.html">Quản trị người sử dụng</a></li>
			<li class=" active item82"><a href="phanquyen.html">Phân quyền người sử dụng</a></li>
			<li class="item83"><a href="log.html">Quản lý log</a></li>
			<li class="item85"><a href="dsmonhoc.html"><a href="changepass.html">Đổi mật khẩu</a></li>			
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



</body></html>