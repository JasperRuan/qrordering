<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="share/index.css">
  <link rel="stylesheet" href = "share/header.css">
  <link rel= "stylesheet" href = "share/footer.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->
    <?php include 'share/header.php' ; ?>

    <div id="login">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div class="col-md-3">
                  <div class = "left-ad">
                    <img src="media/img/left-ad.png" alt="">
                  </div>
                </div>
                <div id="login-column" class="col-md-4">
                    
                    <div id="login-box" class="col-md-12">
                      <!--login page-->
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-left text-info" style="margin-bottom: 20px;">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info" style="color: #9C9C9C !important;">Email:</label><br>
                                <input type="text" name="username" id="username" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info" style="color: #9C9C9C !important; ">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <!--<label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>-->
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit"> <br/>
                                <div class="reg-link" onclick="show()">
                                  <a href="#" >Register here</a>
                                </div>
                            </div>
                            
                        </form>
                        <!--register pages-->
                        <form id="login-form" class="form" action="" method="post" style="display: none;">
                          <h3 class="text-left text-info" style="margin-bottom: 20px;">Register</h3>
                          <div class="form-group">
                              <label for="username" class="text-info" style="color: #9C9C9C !important;">Email:</label><br>
                              <input type="text" name="username" id="username" class="form-control" >
                          </div>
                          <div class="form-group">
                              <label for="password" class="text-info" style="color: #9C9C9C !important; ">Company Name:</label><br>
                              <input type="text" name="password" id="password" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="password" class="text-info" style="color: #9C9C9C !important; ">Phone:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                          <div class="form-group">
                            <label for="password" class="text-info" style="color: #9C9C9C !important; ">Password:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="password" class="text-info" style="color: #9C9C9C !important; ">Re-enter Password:</label><br>
                          <input type="text" name="password" id="password" class="form-control">
                        </div>
                          <div class="form-group">
                              <!--<label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>-->
                              <input type="submit" name="submit" class="btn btn-info btn-md" value="submit"> <br/>
                              <div class="reg-link" onclick="show2()">
                                <a href="#" >Login</a>
                              </div>
                          </div>
                          
                      </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <?php include 'share/footer.php' ; ?>
    <script>
      function show(){
       if( document.getElementsByTagName("form")[0].style.display!="none"){
        document.getElementsByTagName("form")[0].style.display="none"
        document.getElementsByTagName("form")[1].style.display="block"
       }
      }
      function show2(){
       if( document.getElementsByTagName("form")[1].style.display!="none"){
        document.getElementsByTagName("form")[1].style.display="none"
        document.getElementsByTagName("form")[0].style.display="block"
       }
      }
    </script>
</body>
</html>