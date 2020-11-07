<!doctype html>
<html lang="en">
  <head>
    <title>KỸ THUẬT MÁY TÍNH VÀ MẠNG</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h3 style="text-align:center;">KỸ THUẬT MÁY TÍNH VÀ MẠNG</h3>
                </div>
            </div>   
            <div class="row mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sửa</th>
                            <th> Xóa </th>
                             <!-- <th>Tên giảng viên</th> -->
                            <th>Vị trí</th>
                            <!-- <th>Nội dung</th> -->
                            <th>Ảnh</th>
                           
                        </tr>
                    </thead>
                    <?php
                         require("../../config.php");
                        include("../bomontrungtam/function.php");
                        $teacher=getAllKythuattinhtoanvamang();
                        foreach($teacher as $row){ ?>

                        <tbody>
                        <tr>
                            <td>
                                <a href="edit_kythuattinhtoanvamang.php?id=<?php echo $row[0]; ?>"><i class="fa fa-pencil mr-2"></i> Edit</a>
                            </td>
                            <td>
                                <a href="delete_kythuattinhtoanvamang.php?id=<?php echo $row[0]; ?>"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                            <td ><?php  echo $row[1]?></td>
                            <!-- <td> </td> -->
                            <td><img src="<?php echo $row[2] ?>" alt="" class ="img-fluid"> </td>
                            
                            <!-- <td></td> -->
                        </tr>
                        
                    </tbody>
                    <?php
                    }
                    ?>
                    
                </table>
            </div>
            <div class="row">
                <a href="create_kythuatmaytinhvamang.php" class="btn btn-primary" style="margin-right:10px"> Thêm mới</a>
                 <a href="../../phanquyen1.php" class="btn btn-primary">Reset</a> 
            </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>