<!doctype html>
<html lang="en">
  <head>
    <title>Khoa Công nghệ thông tin - Trường ĐH Thủy Lợi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSE.css">
    
    <link rel="stylesheet" href="css/menu_con.css">
    
  </head>
  <body>
      
    <?php include('header.php'); ?>

    <div class="main" style="margin-top: 3%;">
                <div class="container">
                    <div class="row">
                      <div class="col-lg-9">
                        <h1 style="font-size: 34px; line-height: 2; font-family: Calibri;"><b>ĐÀO TẠO</b> </h1>
                        <!-- <div class="row"> -->
                        <?php
                          
                          $host = 'localhost';
                          $user = 'root';
                          $pass = '';
                          $db   = 'daotao';
                          $conn = mysqli_connect($host,$user,$pass, $db);
                          if(!$conn){
                              die("Không thể kết nối");
                          }
                      
                            $sql = "SELECT * FROM daotao";
                            mysqli_set_charset($conn,'UTF8');
                            $result = mysqli_query($conn,$sql);
                            // 3. Xu ly ket qua
                            while($row = mysqli_fetch_assoc($result)){ ?>
                              <div class="col-md-4 "style=" border-bottom:  1px dotted #808080;">
                                <img src="<?php echo $row['img'] ?>" alt="" class="img-fluid pt-2">
                              </div>
                              <div class="col-md-8  pt-2"style=" border-bottom:  1px dotted #808080;font-size:14px">
                                <a href="<?php echo $row['content'] ?> "> <?php echo $row['name'] ?></a>    
                                <!-- <pre  style="overflow-x: hidden;">
                                  <?php echo $row['name11'] ?>
                                </pre> -->
                                </div>
                                <!-- <div class="col-md-5 " style=" border-bottom:  1px dotted #808080;font-size:15px">
                                  <pre style="overflow-x: hidden;">
                                    <?php echo $row['content11'] ?>
                                  </pre>
                                </div> -->
                            <?php               
                              }
                            ?>
                <!-- </div> -->
                        </div>
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
                      <div class="col-lg-3">
                        <div class="tlu-menu">
                          <p style="font-size: 30px; line-height: 2; font-family: Calibri;"><a href="" style="list-style: none;text-decoration: none;">Đào tạo</a></p>
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
    <?php include('footer.php');?>
           


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="CSE.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/3ff58b9e8a.js" crossorigin="anonymous"></script>
     
   </body>
</html>