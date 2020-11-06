<!doctype html>
<html lang="en">
  <head>
    <title>Index Co cau to chuc</title>
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
                    <h3 style="text-align:center;">Lời chào mừng</h3>
                </div>
            </div>   
            
            <div class="row mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sửa</th>
                            <th> Xóa </th>
                            <th>Ảnh</th>
                            <th>Vị trí</th>
                            <th>Tên giảng viên </th>
                            <th>Thông tin</th>
                            <th>Nội dung</th>
                        </tr>
                    </thead>
                    <?php
                         require("../../config.php");
                        include("../gioithieu/function.php");
                        $teacher=getAllCocautochuc();
                        foreach($teacher as $row){ ?>

                        <tbody>
                        <tr>
                            <td>
                                <a href="edit.php?id=<?php echo $row[0]; ?>"><i class="fa fa-pencil mr-2"></i> Edit</a>
                            </td>
                            <td>
                                <a href="delete_cocautochuc.php?id=<?php echo $row[0]; ?>"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                            <td ><img src="<?php echo $row[1] ?>" alt="" clas="img-fluid" style="max-width:100px"></td>
                            <td><?php echo $row[2] ?></td>
                            <td style="100px"><?php echo $row[3] ?></td>
                            <td style="100px"><?php echo $row[4] ?></td>
                            <td><?php echo $row[5] ?></td>
                            
                        </tr>
                        
                    </tbody>
                    <?php
                    }
                    ?>
                    
                </table>
            </div>
            <div class="row">
                <a href="../gioithieu/create_cocautochuc.php" class="btn btn-primary" style="margin-right:10px"> Thêm mới</a>
                <a href="../../phanquyen1.php" class="btn btn-primary">Reset</a>
            </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
     <script src="https://kit.fontawesome.com/3ff58b9e8a.js" crossorigin="anonymous"></script>
  </body>
</html>