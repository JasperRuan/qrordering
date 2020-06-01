<?php include 'share/header_main.php';
if(isset($_COOKIE['qrorder_shop_id'])){
    $shop_id = $_COOKIE['qrorder_shop_id'];
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href = "share/header_main.css">
    
    <link rel="stylesheet" href="share/table.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
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
        .qr_img img {
            margin-top: 5%;
            margin-left: 15%;
        }
        .modal_qr_image {
            width: 80%;
            margin-left: 10%;
            background: white;
            padding-bottom: 10%;
            padding-top: 10%;
        }
        .modal_qr_image img {
            width: 70%;
            margin-left: 15%;
        }
       
    </style>
    
    <title>Hello, Cusotmer name</title>
  </head>
  
  <body>
     
        <div class="sidenav">
            <div class="sidemenue_item" onclick="showSub()">
                商家管理
            </div>
            
            <div class="sidemenue_item" onclick="showSub2()">
                产品管理
            </div>
            <div class="sidemenue_item" onclick="showSub3()">
                订单显示
            </div>
            
            
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
        
        <div class="main" id="main_container">


            <?php
            #get tables from database
            $current_index = 1;
            include 'backend/connect_database.php';
            $sql = "SELECT Default_name, Prefer_name
            FROM Tables
            WHERE Shop_id = '$shop_id'
            ORDER BY Default_name
            ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="qr_item" id="qr_item'.$row['Default_name'].'">
   <div class="title">
      Table '.$row['Default_name'].'
   </div>
   <div class="desc">
      <div class="headingarea" >
         <div class="word">
            备注
         </div>
         <div id="btn'.$row['Default_name'].'">
         <input  class="change_btn" type="button" value="save" >
        </div>
         
      </div>
      <div class="inputarea">
         <input id="input'.$row['Default_name'].'" type="text" name="备注"  class="form-control" value="'.$row['Prefer_name'].'">
      </div>
   </div>
   <div class="qr_img" id="'.$row['Default_name'].'" onclick= "showqr(this.id)">
   </div>
   <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
         <div class="qr_subimg">
            <div class="notify">
               请使用截图工具（Window + shift + S 调出截图）截取下方蓝色区域并打印放到对应桌子上
            </div>
            <div class="qrarea">
               <div class="tableid" id="modal_prefer_name'.$row['Default_name'].'">
                  '.$row['Prefer_name'].'
               </div>
               <img src="media/img/power_wezilla.JPG" alt="">
               <div id="modal'.$row['Default_name'].'" class="modal_qr_image"></div>
               <div class="scan_to_order">
                  请扫二维码点餐<br>
                  Please scan QR code to order food
               </div>
            </div>
         </div>
      </div>
   </div>
</div>';
                    $current_index = $current_index + 1;
                }
            }
            ?>

            <!--这里添加二维码button -->
            <div class="plus_item"  >
                <div class="plus" id="plus_btn">
                    <img src="media/img/plus.jpg" alt="">
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

        $(".sidenav").height(Math.max($(".main").height(),$(".sidenav").height()+50));
        $(".sidenav-sub").height(Math.max($(".main").height(),$(".sidenav-sub").height()+50));

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

        //get the high of the sidebar
        $(".sidenav").height(Math.max($(".main").height(),$(".sidenav").height()));
        $(".sidenav-sub").height(Math.max($(".main").height(),$(".sidenav-sub").height()));
        
        var num = 0;
        var modal = document.getElementsByClassName("modal");
        function showqr(id){
            num = id-1;
            modal[num].style.display = "block";
        }
        function close(id){
            num=id-1;
            modal[num].style.display = "none";
        }

        window.onclick = function(event) {
            
            if (event.target == modal[num]) {
                modal[num].style.display = "none";
            }
        }



    </script>
        <script src="script/qrcode.min.js"></script>
        <script>

            var max = <?php echo $current_index ?>;
            var shop_id = <?php echo $shop_id ?>;

            var i;
            let qrcode = null;
            for (i = 0; i < max-1; i++) {
                qrcode = new QRCode(document.getElementById(i+1));
                qrcode.makeCode("https://webzilla.co.nz/covid/record.php?shop_id="+shop_id+'&table'+(i+1));
                qrcode = new QRCode(document.getElementById('modal'+(i+1)));
                qrcode.makeCode("https://webzilla.co.nz/covid/record.php?shop_id="+shop_id+'&table'+(i+1));
            }

        </script>

  <script>
      function update_prefer_name(item){
          console.log('change_btn clicked');
          var id = item.id;
          var table_id = id.slice(3);
          var prefer_name = $('#input'+table_id).val();
          console.log('prefer_name: ' + prefer_name);
          $.ajax
          ({
              url: 'backend/update_table.php',
              data: {
                  'shop_id': shop_id,
                  'default_name': table_id,
                  'prefer_name': prefer_name,
                  'update_submit': 1
              },
              type: 'post',
              success: function(result)
              {
                  console.log('change succ');
                  document.getElementById('modal_prefer_name'+table_id).innerText = prefer_name;
              }
          });
      }
      $('.change_btn').click(function(){
          console.log('change_btn clicked');
          var id = $(this).parent()[0].id;
          var table_id = id.slice(3);
          var prefer_name = $('#input'+table_id).val();
          $.ajax
          ({
              url: 'backend/update_table.php',
              data: {
                  'shop_id': shop_id,
                  'default_name': table_id,
                  'prefer_name': prefer_name,
                  'update_submit': 1
              },
              type: 'post',
              success: function(result)
              {
                  console.log('change succ');
                  document.getElementById('modal_prefer_name'+table_id).innerText = prefer_name;
              }
          });
      });
      let  q = null;
      $('#plus_btn').click(function(){

          let current_index = max++;
          $.ajax
          ({
              url: 'backend/update_table.php',
              data: {
                  "shop_id": shop_id,
                  "default_name": current_index,
                  'add_submit': 1
              },
              type: 'post',
              success: function(result)
              {
                  $(".sidenav").height(Math.max($(".main").height(),$(".sidenav").height()+50));
                  $(".sidenav-sub").height(Math.max($(".main").height(),$(".sidenav-sub").height()+50));
              }
          });
          var insert_code = '<div class="qr_item" id="qr_item'+ current_index +'">\n' +
              '    <div class="title">\n' +
              '        Table '+ current_index +
              '    </div>\n' +
              '    <div class="desc">\n' +
              '        <div class="headingarea">\n' +
              '            <div class="word">\n' +
              '                备注\n' +
              '            </div>\n' +
              '            <div id="btn'+ current_index +'" onclick="update_prefer_name(this)">\n' +
              '                <input class="change_btn" type="button" value="save">\n' +
              '            </div>\n' +
              '\n' +
              '        </div>\n' +
              '        <div class="inputarea">\n' +
              '            <input id="input'+ current_index +'" type="text" name="备注" class="form-control" value="">\n' +
              '        </div>\n' +
              '    </div>\n' +
              '    <div class="qr_img" id="'+ current_index +'" onclick="showqr(this.id)">\n' +
              '    </div>\n' +
              '    <div id="myModal" class="modal">\n' +
              '        <!-- Modal content -->\n' +
              '        <div class="modal-content">\n' +
              '            <div class="qr_subimg">\n' +
              '                <div class="notify">\n' +
              '                    请使用截图工具（Window + shift + S 调出截图）截取下方蓝色区域并打印放到对应桌子上\n' +
              '                </div>\n' +
              '                <div class="qrarea">\n' +
              '                    <div class="tableid" id="modal_prefer_name'+ current_index +'">\n' +
              '                        Table '+ current_index+'\n' +
              '                    </div>\n' +
              '                    <img src="media/img/power_wezilla.JPG" alt="">\n' +
              '                    <div id="modal'+ current_index + '" class="modal_qr_image"></div>\n' +
              '                    <div class="scan_to_order">\n' +
              '                        请扫二维码点餐<br>\n' +
              '                        Please scan QR code to order food\n' +
              '                    </div>\n' +
              '                </div>\n' +
              '            </div>\n' +
              '        </div>\n' +
              '    </div>\n' +
              '</div>';

          $( insert_code ).insertAfter( "#qr_item"+ (max-2) );
          console.log(current_index);
          q = new QRCode(document.getElementById(current_index));
          q.makeCode("https://webzilla.co.nz/covid/record.php?shop_id="+shop_id+'&table'+(current_index));
          q = new QRCode(document.getElementById('modal'+current_index));
          q.makeCode("https://webzilla.co.nz/covid/record.php?shop_id="+shop_id+'&table'+(current_index));
      })
  </script>

  </body>

</html>
<?php include 'share/footer.php' ; ?>

