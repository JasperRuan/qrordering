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
    
    <link rel="stylesheet" href="share/table.css">
    
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

        <div class="sidenav-sub">
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
        
        <div class="main">

            <div class="qr_item" onclick= "showqr()">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>


                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close" onclick="close()">&times;</span>
                        <p>Some text in the Modal..</p>
                    </div>

                </div>
            </div>

            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>

            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>

            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>



            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>



            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>



            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>



            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>




            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>



            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>


            <div class="qr_item">
                <div class="title">
                    Table 1 <!--get table num from sql table id-->
                </div>
                <div class="desc">
                    <div class="word">
                        备注
                    </div>
                    <div class="inputarea">
                        <input type="text" name="备注"  class="form-control">
                    </div>
                </div>
                <div class="qr_img">
                    <img src="media/img/qrcode.jpg" alt="">
                </div>
            </div>
            <div class="justmargin " style="height:110px">
            </div>
            
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

        $(".sidenav").height(Math.max($(".main").height(),$(".sidenav").height()+50));
        $(".sidenav-sub").height(Math.max($(".main").height(),$(".sidenav-sub").height()+50));


        function showqr(){
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
        }
        function close(){
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            var modal = document.getElementById("myModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
  </body>

</html>
<?php include 'share/footer.php' ; ?>

