<!doctype html>
<html lang="en">
  <head>
    <title>Create Co cau to chuc</title>
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
                <h3 style="text-align:center;">THÊM HỢP TÁC QUỐC TẾ</h3>
                <form action="process_create_hoptacquocte.php" method="post">
                     <div class="row">
                         <div class="col-md-4">
                            <label for="">Nội dung</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea name="noidung" id="" cols="50" rows="10"></textarea>
                                <!-- <small id="helpId" class="text-muted">thêm nội dung vào đây</small> -->
                            </div>
                        </div>
                    </div> 
                     <div class="row">
                         <div class="col-md-4">
                            <label for="">Ảnh</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                 <input type="text" name="anh" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <!-- <textarea name="noidung" id="" cols="30" rows="10"></textarea> -->
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
                               <a href="../../phanquyen1.php" class="btn btn-primary">Reset</a>
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