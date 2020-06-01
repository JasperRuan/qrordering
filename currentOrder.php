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
    
    <link rel="stylesheet" href="share/currentOrder.css">
    
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
            <div class="onprocess">
                <div class="heading">
                    订单更新
                </div>
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
            <div class="processed">
                <div class="heading">
                    正在进行的订单
                </div>
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
            <div class="just_margin">

            </div>





            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="orderDetail">
                        <span class="close">&times;</span>
                        <h3>订单详情</h3>
                    </div>
                    <div class="order_content">
                        <h3>备注1</h3>
                        <h5>Order-ID: XXXX_XXXXXXXXXXX</h5>
                        <h5>订单创建时间： date&time</h5>
                    </div>

                    <div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Scrollable Menu </button>
                                <ul class="dropdown-menu scrollable-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                </ul>
                            </div>
                        <span class="table-add  mb-3 mr-2"><a href="#!" class="text-success"><i
                                            class="fa fa-plus fa-2x" aria-hidden="true"  style="margin-left:30px"></i></a></span>
                    </div>
                    <!-- Editable table -->
                                <div class="card">
                                
                                <div class="card-body table-wrapper-scroll-y my-custom-scrollbar">
                                    <div id="table" class="table-editable">
                                    
                                            
                                    <table class="table table-bordered table-responsive-md table-striped text-center  mb-0">
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
                                        <tr class="hide">
                                            <td class="pt-3-half" >红烧茄子</td>
                                            <td class="pt-3-half">1</td>
                                            <td class="pt-3-half" >20</td>
                                            <td>
                                            <span class="table-remove"><button type="button"
                                                class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                                <!-- Editable table -->

                                
                            
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

        const $tableID = $('#table');
        //remove dish item
        $('.table-add').on('click', 'i', () => {

            const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

            if ($tableID.find('tbody tr').length === 0) {

                $('tbody').append(newTr);
            }

            $tableID.find('table').append($clone);
        });

        $tableID.on('click', '.table-remove', function () {

            $(this).parents('tr').detach();
        });

        //sidebar high
        function checkheight(){
            $(".sidenav").height(Math.max($(".main").height(),$(".sidenav").height()+50));
            $(".sidenav-sub").height(Math.max($(".main").height(),$(".sidenav-sub").height()+50));
        }
        
      
       
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
             function openModal(id) {
                
                modal.style.display = "block";
                modal.id=id;
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

