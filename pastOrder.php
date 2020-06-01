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
    
    <link rel="stylesheet" href="share/pastOrder.css">
    
    <style>
     
      
       
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

        
        
        <div class="main">
        
           <!-- Editable table -->
            <div class="card">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Editable table</h3>
            <div class="card-body">
                <div id="table" class="table-editable">
                
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                    <tr>
                        <th class="text-center">流水号</th>
                        <th class="text-center">订单开始时间</th>
                        <th class="text-center">订单完成时间</th>
                        <th class="text-center">桌号</th>
                        <th class="text-center">消费金额</th>
                        
                        <th class="text-center">Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="pt-3-half" >XXX-XXXXX-XXXX</td>
                        <td class="pt-3-half">2020-5-25 17：49</td>
                        <td class="pt-3-half" >2020-5-25 18：00</td>
                        <td class="pt-3-half">VIP1</td>
                        <td class="pt-3-half" >123</td>
                        
                        <td>
                        <span class="table-remove" ><button type="button"
                            class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                        </td>
                    </tr>
                    <!-- This is our clonable table line -->
                  
                    <!-- This is our clonable table line -->
                   
                    </tbody>
                </table>
                </div>
            </div>
            </div>
            <!-- Editable table -->
            

            <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                    确定删除该历史订单吗？
                    <div class="deleteButton">
                        <button id="delete"class="btn btn-primary" style="margin-right: 40% ; background-color: #B22222;">删除</button><button class="btn btn-primary">取消</button>
                    </div>
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
        //sidebar high
        function checkheight(){
            $(".sidenav").height(Math.max($(".main").height(),$(".sidenav").height()+50));
            $(".sidenav-sub").height(Math.max($(".main").height(),$(".sidenav-sub").height()+50));
            }


        //table js start here
      

        const $tableID = $('#table');
        

       
        var modal = document.getElementById("myModal");
        $tableID.on('click', '.table-remove', function () {
            modal.style.display = "block";
            let tritem =$(this).parents('tr');
            $(".deleteButton").on("click", function () {tritem.detach();modal.style.display = "none";})
                
                
            
        });

        // A few jQuery helpers for exporting only
        

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        function notifyRemove() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
  </body>

</html>
<?php include 'share/footer.php' ; ?>

