<?php   
    
    require_once('../../config.php');
    $id=$_GET['id'];
    $sql="SELECT * FROM daotao where id=$id";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Create Teacher</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container " style="justify-content:center;"  >
        <div class="row">
            <div class="col-md-6">
                <h3 style="text-align:center;">SỬA CHƯƠNG TRÌNH ĐÀO TẠO</h3>
                <form action='process_edit_daotao.php?id=<?php echo $row['id']?>' method="POST" onsubmit="return checked();"name="regform" id="regform">
                    <div class="form-group">
                      <label for="">Sửa chương trình</label>
                    
                    </div>
                    <div class="row">
                         <div class="col-md-4">
                            <label for="">Ảnh </label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                      
                                <input type="text" value="<?php  echo $row['img']; ?>" name="img" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>
                    </div>
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
                            <label for="">Tên chương trình</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                      
                                <input type="text" value="<?php  echo $row['name']; ?>" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-4">
                            <label for="">Tóm tắt</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                
                                <input type="text" value="<?php  echo $row['description']; ?>" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-4">
                            <label for="">Nội dung</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                            <input type="text" value="<?php  echo $row['content']; ?>" name="content" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <!-- <input type="text" name="content" value="<?php  echo $row['content']; ?>" id="" cols="50" rows="10" style=""></input> -->
                                
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>