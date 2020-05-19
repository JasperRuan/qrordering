<?php include 'share/header.php' ; ?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        .input_error {
            border: 2px solid red;
        }
        .login_message, .register_message {
            color: red
        }


    </style>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->


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
                        <form id="login-form" class="form" action="backend/login_validation.php" method="post">
                            <h3 class="text-left text-info" style="margin-bottom: 20px;">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info" style="color: #9C9C9C !important;">Email:</label><br>
                                <input type="text" name="login_email" id="login_email" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info" style="color: #9C9C9C !important; ">Password:</label><br>
                                <input type="text" name="login_password" id="login_password" class="form-control">
                            </div>
                            <p class="login_message" id="login_message">&nbsp;</p>
                            <div class="form-group">
                                <!--<label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>-->
                                <input type="submit" name="login_submit" id="login_submit" class="btn btn-info btn-md" value="Login"> <br/>
                                <div class="reg-link" onclick="show()">
                                  <a href="#" >Register here</a>
                                </div>
                            </div>

                        </form>
                        <!--register pages-->
                        <form id="login-form" class="form" action="backend/register_validation.php" method="post" style="display: none;">
                          <h3 class="text-left text-info" style="margin-bottom: 20px;">Register</h3>
                          <div class="form-group">
                              <label for="username" class="text-info" style="color: #9C9C9C !important;">Email:</label><br>
                              <input type="text" name="register_email" id="register_email" class="form-control" >
                          </div>
                          <div class="form-group">
                              <label for="password" class="text-info" style="color: #9C9C9C !important; ">Company Name:</label><br>
                              <input type="text" name="register_name" id="register_name" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="password" class="text-info" style="color: #9C9C9C !important; ">Phone:</label><br>
                            <input type="text" name="register_phone" id="register_phone" class="form-control">
                        </div>
                          <div class="form-group">
                            <label for="password" class="text-info" style="color: #9C9C9C !important; ">Password:</label><br>
                            <input type="text" name="register_password" id="register_password" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="password" class="text-info" style="color: #9C9C9C !important; ">Re-enter Password:</label><br>
                          <input type="text" name="register_re_password" id="register_re_password" class="form-control">
                        </div>
                            <p class="register_message" id="register_message">&nbsp;</p>
                          <div class="form-group">
                              <!--<label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>-->
                              <input type="submit" name="register_submit" id="register_submit" class="btn btn-info btn-md" value="Register"> <br/>
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

    <script>
        var currentForm = 0;

      function show(){
       if( document.getElementsByTagName("form")[0].style.display!="none"){
        document.getElementsByTagName("form")[0].style.display="none";
        document.getElementsByTagName("form")[1].style.display="block";
        currentForm = 1;

       }
      }
      function show2(){
       if( document.getElementsByTagName("form")[1].style.display!="none"){
        document.getElementsByTagName("form")[1].style.display="none";
        document.getElementsByTagName("form")[0].style.display="block";
           currentForm = 0;
       }
      }
        $(document).ready(function(){
            $("form").submit(function(event) {
                event.preventDefault();
                if (currentForm == 0){
                    var email = $("#login_email").val();
                    var password = $("#login_password").val();
                    var submit = $("#login_submit").val();
                    console.log(submit);
                    $("#login_message").load("backend/login_validation.php",{
                        email: email,
                        password: password,
                        submit: submit
                    });
                }else {
                    var register_email = $("#register_email").val();
                    var register_name = $("#register_name").val();
                    var register_phone = $("#register_phone").val();
                    var register_password = $("#register_password").val();
                    var register_re_password = $("#register_re_password").val();
                    var register_submit = $("#register_submit").val();
                    console.log(register_submit);
                    $("#register_message").load("backend/register_validation.php",{
                        register_email: register_email,
                        register_name: register_name,
                        register_phone: register_phone,
                        register_password: register_password,
                        register_re_password: register_re_password,
                        register_submit: register_submit
                    });
                }

            })
        })

    </script>
</body>
</html>

<?php include 'share/footer.php' ; ?>