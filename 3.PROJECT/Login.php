<!doctype html>
<html lang="en">
  <head>
    <title>User Log In</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../3.PROJECT/CSE.css">
  </head>
  <body>
    <form action="process-login.php" method="post">
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
                        <a href="../3.PROJECT/Login.php" class="text-white"> Login</a>
                    </li>
                    <li>|</li>
                    <li>
                        <a href="../3.PROJECT/register.php" class="text-white"> Register</a>
                    </li>
                    <li>|</li>
                        
                    <li>
                         Ngôn ngữ:
                        <a href="http://cse.tlu.edu.vn/#"><img src="http://cse.tlu.edu.vn/cse/assets/images/icons/icon-lang-vi.png" alt=""></a> 
                        <a href="http://cse.tlu.edu.vn/#"><img src="http://cse.tlu.edu.vn/cse/assets/images/icons/icon-lang-en.png" alt=""> </a> 
                    </li>
                </ul>     
            </div>
        </div>
        <div class="header" style="border-bottom: 1px solid rgb(183, 183, 211);" >
            <div class="container" >
                 <div class="header_logo " >
                    <h1>
                        <a href="../3.PROJECT/CSE.php" >
                             <img src="images/logo.jpg" alt="" width="547px"class="img-fluid" height="82px">
                        </a>
                    </h1>
                </div> 
            </div>
        </div>
        <div class="main ml-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <b>Username</b>
                          <input type="text" class="form-control" name="txtUsername" id="txtUsername" aria-describedby="helpId" placeholder="">
                        </div>
                         <div class="form-group">
                          <b>Password</b>
                          <input type="password" class="form-control" name="txtPassword" id="txtPassword" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                 <input type="submit" class="form-control btn btn-primary" name="login" id="" aria-describedby="helpId" placeholder="" value="Login">
                            </div>
                            <div class="col-md-5">
                                 <a name="" id="" class="btn btn-outline-dark" href="http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/CSE.php" role="button">Cancel</a>
                            </div>
                          
                        </div>
                        <div class="row" style="padding-left:10px;padding-top:10px">
                            <div class="col-md-1">
                                <a href="" class="checkbox">
                                    <input type="checkbox" style="" class="form-check-input">  
                                </a>
                            </div>
                            <div class="col-md-10">
                                <a href="" style="color: black;text-decoration: none;font-weight: 600;">
                                 Remember Login
                                </a>
                            </div>
                         </div>
                        <div class="row">
                            <a name="" id="" class="btn btn-outline-dark mr-2 ml-2" href="../3.PROJECT/register.php" role="button">Register</a>
                            <a name="" id="" class="btn btn-outline-dark" href="#" role="button">Reset Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div style="background-color: #003478;height: 40px;border-top: 2px solid gray;margin-top: 40px;"></div>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../3.PROJECT/js/login.js"></script>
  </body>
</html>


