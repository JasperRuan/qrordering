<?php include 'share/phoneheader.php' ; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href ="share/orderPhone.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    
    
   
    
    <title>Hello, Cusotmer name</title>
  </head>
  
  <body>
      <div class="main">
            
            <div class="Tabbar">
                <div class="tabitem" id="firstTab" onclick="Openmenu('newOrder');changeColor1('this.id');">
                    订单更新
                </div>
                <div class="tabitem" onclick="Openmenu('ProcessOrder');changeColor2('this.id');">
                    正在进行的订单
                </div>
            </div>
            <!--新的订单-->
            <div id="newOrder" class="order-container items">
                <div class="process_item">
                        <div class="item" id="1" onclick="openModal(this.id)">
                            <div class="tabledetail">
                                <h2>备注1</h2>
                                <h5>订单开始时间: 18:30</h5>
                            </div>
                            <div class="status">
                                    <div class="status_new">
                                        新增订单
                                    </div>

                            </div>
                            <div class="goto">
                                <img src="media/img/右边.png" alt="" width="100%">
                            </div>
                            
                        </div>



                        <div class="item">
                            <div class="tabledetail">
                                <h2>备注1</h2>
                                <h5>订单开始时间: 18:30</h5>
                            </div>
                            <div class="status">
                                    <div class="status_add">
                                        客户增加菜品
                                    </div>

                            </div>
                            <div class="goto">
                                <img src="media/img/右边.png" alt="" width="100%">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--正在进行的订单-->
            <div id="ProcessOrder" class="order-container items" style="display:none">
                <div class="process_item">
                    <div class="item">
                            <div class="tabledetail">
                                <h2>备注1</h2>
                                <h5>订单开始时间: 18:30</h5>
                            </div>
                            <div class="status">
                                    

                            </div>
                            <div class="goto">
                                <img src="media/img/右边.png" alt="" width="100%">
                            </div>
                            
                        </div>


                        
                </div>
            </div>
      </div>
                
    <!--订单详情 start here-->
    <div class="order-detail">
        <div class="go-back" onclick="backToMain()">
            <img src="media/img/back.png" alt="">
        </div>
        <div class="order-dish">
            <div class="order-title">
                订单详情
            </div>
            <div class="order-info">
                Table1 <br>
                Order-ID: XXX-XXXX-XXXXX <br>
                订单创建时间:21/05/2020 17:55
            </div>
            




            <div>
                       
                    <!-- Editable table -->
                                <div class="card">
                                
                                <div class="card-body table-wrapper-scroll-y my-custom-scrollbar">
                                    <div id="table" class="table-editable">
                                    
                                            
                                    <table class="table table-bordered  table-striped text-center  mb-0">
                                        <thead>
                                        <tr>
                                            
                                            <th class="text-center">菜品名称</th>
                                            <th class="text-center">数量</th>
                                            <th class="text-center">单价</th>
                                            <th class="text-center">移除</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            
                                            <td class="pt-3-half" >红烧茄子</td>
                                            <td class="pt-3-half">1</td>
                                            <td class="pt-3-half" >20</td>
                                            <td>
                                            <span class="table-remove"><button type="button"
                                                class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                            </td>
                                        </tr>
                                        <!-- This is our clonable table line -->
                                        
                                        <!-- This is our clonable table line -->
                                       
                                        <!-- This is our clonable table line -->
                                      
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                                <!-- Editable table -->

                                <form action="/action_page.php">
                                    <label for="food">选择菜品:</label>
                                    <select name="food" id="food">
                                        <option value="鸡肉">鸡肉</option>
                                        <option value="水煮牛肉">水煮牛肉</option>
                                        
                                    </select>
                                    <span class="table-add  mb-3 mr-2"><a href="#!" class="text-success"><i
                                            class="fa fa-plus fa-2x" aria-hidden="true"  style="margin-left:30px"></i></a></span>
                                </form>
                        
                   
                            
                            <div class="total_price">
                                Total : <strong>123</strong>
                            </div>

                            <div class="operation_area">
                                <div class="operation_area_btn">
                                    <button type="button" class="btn btn-primary">保存订单</button>
                                </div>
                                <div class="operation_area_btn">
                                    <button type="button" class="btn btn-primary">订单进行</button>
                                </div>
                                
                                <div class="operation_area_btn">
                                    <button type="button" class="btn btn-primary">删除订单</button>
                                </div>
                            </div>
                        </div>


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
        </div>
    </div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
            function Openmenu(menuItem) {
                var i;
                var x = document.getElementsByClassName("items");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                document.getElementById(menuItem).style.display = "block";  
            }
            function changeColor1(id){
               
                    document.getElementsByClassName("tabitem")[0].style.backgroundColor="#265CBF";
                    document.getElementsByClassName("tabitem")[0].style.color="#ffff"
                    document.getElementsByClassName("tabitem")[1].style.backgroundColor="#ffff";
                    document.getElementsByClassName("tabitem")[1].style.color="#265CBF"
            }
            function changeColor2(id){
               document.getElementsByClassName("tabitem")[1].style.backgroundColor="#265CBF";
               document.getElementsByClassName("tabitem")[1].style.color="#ffff"
               document.getElementsByClassName("tabitem")[0].style.backgroundColor="#ffff";
               document.getElementsByClassName("tabitem")[0].style.color="#265CBF"
       }
            function openModal(){
                document.getElementsByClassName("main")[0].style.display ="none"
                document.getElementsByClassName("order-detail")[0].style.display ="block"
            }
            function backToMain(){
                document.getElementsByClassName("main")[0].style.display ="block"
                document.getElementsByClassName("order-detail")[0].style.display ="none"
            }
            const $tableID = $('#table');
            var modal = document.getElementById("myModal");
            $tableID.on('click', '.table-remove', function () {
                modal.style.display = "block";
                let tritem =$(this).parents('tr');
                $(".deleteButton").on("click", function () {tritem.detach();modal.style.display = "none";})
                
                
            
        });



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