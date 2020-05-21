<?php include 'share/header_main.php' ; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href = "share/header_main.css">
    
    <link rel="stylesheet" href="share/customer.css">
    
    <style>
     
       .row{
           width:100% !important;
           position:relative !important;
           display:inline-block !important;
       }
       .bottom{
           margin-bottom:30px;
           
       }
       .button-group{
           margin-top:20px
       }
       
    </style>
    
    <title>Hello, Cusotmer name</title>
  </head>
  
  <body>
      <div class="info">
        <div class="sidenav">
            <div class="sidemenue_item"  onclick="showSub()">
                商家管理
            </div>
            
            <div class="sidemenue_item">
                产品管理
            </div>
            <div class="sidemenue_item">
                订单显示
            </div>
            
            
        </div>

        <div class="sidenav-sub" >
            <div id="1" style="display:none">
                <div class="sub_item">
                    <a href="table.php">
                        桌号管理
                    </a>
                </div>
                
                <div class="sub_item">
                    <a href="profile.php">
                        商家信息
                    </a>
                </div>
                
            </div>
        </div>
        <form action="" >
        <div class="main_container">
            
            <div class="bus_info">

                <div class="title">
                    Store Profile
                  
                </div>

                <div class="row">
                    <div class="fonts col-md-3">
                        LOGO
                    </div>
                    
                    <div class="edit_info ">
                        <img  src="media/img/logo_reg.jpg" alt="" >
                        <input type="button" class="btn btn-primary" value="Edit"></input>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="fonts col-md-3">
                            English Name
                    </div>
                    <div class="user_input">
                    <img src="media/img/edit.png" alt="" width="20px" height="20px"><input type="text" value = "Webzilla" name="englishname" id="englishname" class="form-control">
                    </div>
                </div>
                <hr>
                <div class="row bottom">
                    <div class="fonts col-md-3">
                            chinese Name
                    </div>
                    <div class="user_input">
                        <img src="media/img/edit.png" alt="" width="20px" height="20px"><input type="text" value ="网斯拉 "name="englishname" id="englishname" class="form-control">
                    </div>
                </div>
                
           
            </div>
            
            <div class="fix_info">
                <div class="title" style="margin-bottom:10px">
                    Contact
                  
                </div>
                <div class="row">
                    <div class="fonts col-md-3" >
                            Contact Number
                    </div>
                    <div class="user_input" style="margin-top:10px" >
                        0224112551 
                        <!-- 记得这里要提取用户SQL 手机号 -->
                    </div>

                    
                </div>
                <hr>
                <div class="row bottom">
                    <div class="fonts col-md-3" >
                        Email
                    </div>
                    <div class="user_input" style="margin-top:10px" >
                        hebowen360@gmail.com
                        <!-- 记得这里要提取用户SQL 手机号 -->
                    </div>

                    
                </div>
                
            </div>
            <div class="button-group">
                <input type="button" class="btn btn-primary" value="Save Profile"></input>
            </div>
            
        </div>
        </form>
    </div>
                

        

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        function showSub(){
            document.getElementsByClassName("sidemenue_item")[0].style.backgroundColor = "#ffffff"
            document.getElementsByClassName("sidemenue_item")[0].style.color = "#265CBF"
            if(document.getElementById("1").style.display == "none"){
                document.getElementById("1").style.display="block"
            }else{
                document.getElementById("1").style.display="none"
                document.getElementsByClassName("sidemenue_item")[0].style.backgroundColor = "#265CBF"
                document.getElementsByClassName("sidemenue_item")[0].style.color = "#ffff"
            }
        }
    </script>
  </body>

</html>
<?php include 'share/footer.php' ; ?>