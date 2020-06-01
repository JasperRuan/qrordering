<?php include 'share/header_main.php';
if(isset($_COOKIE['qrorder_shop_id'])){
    $shop_id = $_COOKIE['qrorder_shop_id'];

    if(isset($_COOKIE['qrorder_chinese_name'])){
        $chinese_name = $_COOKIE['qrorder_chinese_name'];
    }
    else {
        $chinese_name = '';
    }

    if(isset($_COOKIE['qrorder_english_name'])){
        $english_name = $_COOKIE['qrorder_english_name'];
    }
    else {
        $english_name = '';
    }

    if(isset($_COOKIE['qrorder_phone'])){
        $phone = $_COOKIE['qrorder_phone'];
    }
    else {
        $phone = '';
    }

    if(isset($_COOKIE['qrorder_email'])){
        $email = $_COOKIE['qrorder_email'];
    }
    else {
        $email = '';
    }
    #get logo path from database
    include 'backend/connect_database.php';
    $sql = "SELECT Logo_path
            FROM Logos
            WHERE Shop_id = '$shop_id' 
            ";
    $result = $conn->query($sql);
    $logo_path = 'media/img/logo_reg.jpg';
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $logo_path = $row['Logo_path'];
        }

    }
}
else {
    header('location: https://www.qrordernz.com');
}
?>

    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
            input[type="file"] {
                display: none!important;
            }
            .custom-file-upload {
                border: 1px solid #ccc;
                display: inline-block;
                padding: 6px 12px;
                cursor: pointer;
                position: relative;
                bottom: 5px;
                background: gray;
            }
            #logo {

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

            
            <div class="sidemenue_item"  onclick="showSub2()">

                产品管理
            </div>
            <div class="sidemenue_item" onclick="showSub3()">
                订单显示
            </div>


        <div class="sidenav-sub">
            <div id="menu1" style="display:none">

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
            <div id="menu2" style="display:none">
                <div class="sub_item">
                    <a href="dishcata.php">
                        菜品分类
                    </a>
                </div>
                
                <div class="sub_item">
                    <a href="dishmanage.php">
                       菜品管理
                    </a>
                </div>
                
            </div>
            <div id="menu3" style="display:none">
                <div class="sub_item">
                    <a href="currentOrder.php">
                        实时订单
                    </a>
                </div>
                
                <div class="sub_item">
                    <a href="pastOrder.php">
                       历史订单
                    </a>
                </div>
                
            </div>
        </div>

        <div class="profile_message" id="profile_message" style="width: 40%;margin-left: 30%;background: green;color: white;text-align: center;padding: 6px 0;font-size: 20px;visibility: hidden">
            hello
        </div>
        <form action="backend/update_shop_info.php" method="post" enctype="multipart/form-data">
            <div class="main_container">

                <div class="bus_info">

                    <div class="title">
                        Store Profile


                    </div>

                    <div class="row">
                        <div class="fonts col-md-3">
                            LOGO
                        </div>
                        <div class="edit_info " style="border: none">
                            <img  src="<?php echo $logo_path; ?>" alt="" id="shop_logo" style="border: 1px solid black">
                            <label for="logo" class="custom-file-upload" style="width: inherit">
                                Upload
                            </label>
                            <input type="file" class="btn btn-primary" value="Edit" id="logo" name="logo">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="fonts col-md-3">
                            English Name
                        </div>
                        <div class="user_input">
                            <img src="media/img/edit.png" alt="" width="20px" height="20px">
                            <input type="text" value = "<?php echo $english_name; ?>" name="english_name" id="english_name" class="form-control">
                        </div>
                    </div>

                    <hr>
                    <div class="row bottom">
                        <div class="fonts col-md-3">
                            Chinese Name
                        </div>
                        <div class="user_input">
                            <img src="media/img/edit.png" alt="" width="20px" height="20px">
                            <input type="text" value ="<?php echo $chinese_name; ?>" name="chinese_name" id="chinese_name" class="form-control">
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

                            <?php echo $phone; ?>
                        </div>


                    </div>
                    <hr>
                    <div class="row bottom">
                        <div class="fonts col-md-3" >
                            Email
                        </div>
                        <div class="user_input" style="margin-top:10px" >
                            <?php echo $email; ?>
                            <!-- 记得这里要提取用户SQL 手机号 -->
                        </div>

                    </div>

                </div>
                <div class="button-group">
                    <input type="submit" id="submit" class="btn btn-primary" value="Save Profile"></input>
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
            document.getElementsByClassName("sidemenue_item")[1].style.backgroundColor = "#265CBF"
            document.getElementsByClassName("sidemenue_item")[1].style.color = "#ffffff"
            document.getElementsByClassName("sidemenue_item")[2].style.backgroundColor = "#265CBF"
            document.getElementsByClassName("sidemenue_item")[2].style.color = "#ffffff"
            if(document.getElementById("menu1").style.display == "none"){
                document.getElementById("menu1").style.display="block"
                document.getElementById("menu2").style.display="none"
                document.getElementById("menu3").style.display="none"
            }else{
                document.getElementById("menu1").style.display="none"
                document.getElementById("menu2").style.display="none"
                document.getElementById("menu3").style.display="none"
                document.getElementsByClassName("sidemenue_item")[0].style.backgroundColor = "#265CBF"
                document.getElementsByClassName("sidemenue_item")[0].style.color = "#ffff"
            }
        }


        function showSub2(){
            document.getElementsByClassName("sidemenue_item")[1].style.backgroundColor = "#ffffff"
            document.getElementsByClassName("sidemenue_item")[1].style.color = "#265CBF"
            document.getElementsByClassName("sidemenue_item")[0].style.backgroundColor = "#265CBF"
            document.getElementsByClassName("sidemenue_item")[0].style.color = "#ffffff"
            document.getElementsByClassName("sidemenue_item")[2].style.backgroundColor = "#265CBF"
            document.getElementsByClassName("sidemenue_item")[2].style.color = "#ffffff"
            if(document.getElementById("menu2").style.display == "none"){
                document.getElementById("menu2").style.display="block"
                document.getElementById("menu1").style.display="none"
                document.getElementById("menu3").style.display="none"
            }else{
                document.getElementById("menu1").style.display="none"
                document.getElementById("menu2").style.display="none"
                document.getElementById("menu3").style.display="none"
                document.getElementsByClassName("sidemenue_item")[1].style.backgroundColor = "#265CBF"
                document.getElementsByClassName("sidemenue_item")[1].style.color = "#ffff"
            }
        }

<<<<<<< HEAD
        function showSub3(){
            document.getElementsByClassName("sidemenue_item")[2].style.backgroundColor = "#ffffff"
            document.getElementsByClassName("sidemenue_item")[2].style.color = "#265CBF"
            document.getElementsByClassName("sidemenue_item")[1].style.backgroundColor = "#265CBF"
            document.getElementsByClassName("sidemenue_item")[1].style.color = "#ffffff"
            document.getElementsByClassName("sidemenue_item")[0].style.backgroundColor = "#265CBF"
            document.getElementsByClassName("sidemenue_item")[0].style.color = "#ffffff"
            if(document.getElementById("menu3").style.display == "none"){
                document.getElementById("menu3").style.display="block"
                document.getElementById("menu2").style.display="none"
                document.getElementById("menu1").style.display="none"
            }else{
                document.getElementById("menu3").style.display="none"
                document.getElementById("menu2").style.display="none"
                document.getElementById("menu1").style.display="none"
                document.getElementsByClassName("sidemenue_item")[2].style.backgroundColor = "#265CBF"
                document.getElementsByClassName("sidemenue_item")[2].style.color = "#ffff"
            }
        }
=======
       
    </script>

    <script>
        var file_change = false;
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#shop_logo').attr('src', e.target.result);
                    file_change = true;
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#logo").change(function() {
            readURL(this);
        });


        $(document).ready(function(){
            $("form").submit(function(event) {
                event.preventDefault();
                var english_name = $("#english_name").val();
                var chinese_name = $("#chinese_name").val();
                var submit = $("#submit").val();
                console.log(submit);
                $("#profile_message").load("backend/update_shop_info.php",{
                    english_name: english_name,
                    chinese_name: chinese_name,
                    submit: submit
                });

                if (file_change){
                    var fd = new FormData();
                    var files = $('#logo')[0].files[0];
                    fd.append('file',files);

                    $.ajax({
                        url: 'backend/upload_logo.php',
                        type: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        success: function(response){
                            if(response != 0){


                            }else{

                            }
                        },
                    });
                }
            })
        })

>>>>>>> 426ae992be6994de653b2374d0e4fac9291aabfd
    </script>
    </body>

    </html>
<?php include 'share/footer.php' ; ?>