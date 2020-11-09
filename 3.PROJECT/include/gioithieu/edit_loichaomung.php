<?php   
    
    require_once('../../config.php');
    $id=$_GET['id'];
    $sql="SELECT * FROM loichaomung where id=$id";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit Welcome</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
  </head>
  <body>
      <div class="container " style="justify-content:center;"  >
        <div class="row">
            <div class="col-md-6">
                <h3 style="text-align:center;">SỬA LỜI CHÀO MỪNG</h3>
                <form action='process_edit_loichaomung.php?id=<?php echo $row['id']?>' method="POST" onsubmit="return checked();"name="regform" id="regform">
                    
                    <!-- <div class="row">
                         <div class="col-md-4">
                            <label for="">Thông tin</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                 <input type="text" name="thongtin" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div> -->
                     <div class="row">
                         <div class="col-md-4">
                            <label for="">Nội dung</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <!-- <textarea name="noidung" id="" cols="50" rows="10" value =""></textarea> -->
                                <input type="text" value="<?php  echo $row['content']; ?>" name="noidung" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                         <div class="col-md-4">
                            <!-- <label for="">Dạy môn</label> -->
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                               <input type="submit" value="Lưu lại" class="btn btn-primary"> 
                               <a href="../gioithieu/index_loichaomung.php" class="btn btn-primary">Reset</a>
                            </div>
                        </div>
                    </div>
                    

                </form>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>