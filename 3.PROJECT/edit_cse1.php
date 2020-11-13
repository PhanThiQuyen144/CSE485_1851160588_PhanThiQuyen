<?php   
    
    require_once('config.php');
    $id=$_GET['id'];
    $sql="SELECT * FROM cse1 where id=$id";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit Greetings and scientific research</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container " style="justify-content:center;"  >
        <div class="row">
            <div class="col-md-12">
                <h3 style="text-align:center;">SỬA NỘI DUNG</h3>
                <form action='process_edit_cse1.php?id=<?php echo $row['id']?>' method="POST" onsubmit="return checked();"name="regform" id="regform">
                    <div class="row">
                         <div class="col-md-10">
                            <label for="">Ảnh</label>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                 <input type="text" value="<?php  echo $row['image']; ?>" name="anh" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                     <div class="row">
                         <div class="col-md-10">
                            <label for="">Thông tin</label>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                 <input type="text" value ="<?php  echo $row['infor']; ?>" name="thongtin" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                         <div class="col-md-10">
                            <label for=""> Tiêu đề</label>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                 <input type="text" value="<?php  echo $row['name']; ?>" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-10">
                            <label for=""> Tiêu đề 1</label>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                 <input type="text" value="<?php  echo $row['name1']; ?>" name="name1" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>

                   
                   
                    
                    
                    <div class="row">
                         <div class="col-md-4">
                            <!-- <label for="">Dạy môn</label> -->
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                               <input type="submit" value="Lưu lại" class="btn btn-primary"> 
                               <a href="index_cse1.php" class="btn btn-primary">Reset</a>
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
     <script src="https://kit.fontawesome.com/3ff58b9e8a.js" crossorigin="anonymous"></script>
	 <!-- <script src="../3.PROJECT/js/login.js"></script> -->
  </body>
</html>