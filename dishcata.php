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
    
    <link rel="stylesheet" href="share/dishcata.css">
    
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
            <div class="sidemenue_item">
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
        </div>

        
        
        <div class="main">
        <!-- Editable table -->
            <div class="card">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4" style="background-color: #265CBF; color:white">菜品管理</h3>
            <div class="card-body">
                <div id="table" class="table-editable">
                <span class="table-add float-right mb-3 mr-2" onclick="checkheight()" id="myBtn"><a href="#!" class="text-success"><i
                        class="fa fa-plus fa-2x" aria-hidden="true"></i></a></span>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">产品分类管理</th>
                        <th class="text-center">Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <form action="">
                            <td class="pt-3-half">
                                1
                            </td>
                            <td class="pt-3-half" >
                                <div class="content1" >
                                    <p>鸡肉(chicken<!--english name from sql-->)</p>
                                </div>
                            </td>
                            
                            <td>
                                
                                    <span class="table-remove"><button type="button"
                                        class="btn btn-danger btn-rounded btn-sm my-0"  style="margin-bottom:5px !important">删除产品</button></span>
                                    </br>
                                    
                                
                            </td>
                        </form>
                    </tr>
                    <!-- This is our clonable table line -->
                   
                    <!-- This is our clonable table line -->
                    
                    <!-- This is our clonable table line -->
                    <tr>
                        <form action="">
                            <td class="pt-3-half">
                                1
                            </td>
                            <td class="pt-3-half" >
                                <div class="content1">
                                <p>鸡肉(chicken<!--english name from sql-->)</p>
                                </div>
                            </td>
                            
                            <td>
                                
                                    <span class="table-remove"><button type="button"
                                        class="btn btn-danger btn-rounded btn-sm my-0"  style="margin-bottom:5px !important">删除产品</button></span>
                                    </br>
                                    
                                
                            </td>
                        </form>
                    </tr>
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
                        <div class="title" style="margin-bottom:25px">
                            添加分类
                        </div>
                        <div class="neiron">
                            <form action="">
                                <div class="catag">
                                    <div class="head">
                                        中文名字
                                    </div>
                                    <input type="text" require>

                                    
                                </div>
                                <div class="catag">
                                    <div class="head">
                                        英文名字
                                    </div>
                                    <input type="text">

                                    
                                </div>
                                <div class="save-btn">
                                    <input type="button" class="btn btn-primary" value="添加">
                                </div>
                            </form>
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
            if(document.getElementById("menu1").style.display == "none"){
                document.getElementById("menu1").style.display="block"
                document.getElementById("menu2").style.display="none"
            }else{
                document.getElementById("menu1").style.display="none"
                document.getElementById("menu2").style.display="none"
                document.getElementsByClassName("sidemenue_item")[0].style.backgroundColor = "#265CBF"
                document.getElementsByClassName("sidemenue_item")[0].style.color = "#ffff"
            }
        }


        function showSub2(){
            document.getElementsByClassName("sidemenue_item")[1].style.backgroundColor = "#ffffff"
            document.getElementsByClassName("sidemenue_item")[1].style.color = "#265CBF"
            document.getElementsByClassName("sidemenue_item")[0].style.backgroundColor = "#265CBF"
            document.getElementsByClassName("sidemenue_item")[0].style.color = "#ffffff"
            if(document.getElementById("menu2").style.display == "none"){
                document.getElementById("menu2").style.display="block"
                document.getElementById("menu1").style.display="none"
            }else{
                document.getElementById("menu1").style.display="none"
                document.getElementById("menu2").style.display="none"
                document.getElementsByClassName("sidemenue_item")[1].style.backgroundColor = "#265CBF"
                document.getElementsByClassName("sidemenue_item")[1].style.color = "#ffff"
            }
        }

        //sidebar high
        function checkheight(){
            $(".sidenav").height(Math.max($(".main").height(),$(".sidenav").height()+50));
            $(".sidenav-sub").height(Math.max($(".main").height(),$(".sidenav-sub").height()+50));
            }
        //table js start here

                // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
            

          
// When the user clicks the button, open the modal
        const $tableID = $('#table');
        const newTr = `
        <tr class="hide">
        <td class="pt-3-half" contenteditable="true">Example</td>
        <td class="pt-3-half" contenteditable="true">Example</td>
        <td class="pt-3-half" contenteditable="true">Example</td>
        <td class="pt-3-half" contenteditable="true">Example</td>
        <td class="pt-3-half" contenteditable="true">Example</td>
        <td class="pt-3-half">
            <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
            <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
        </td>
        <td>
            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
        </td>
        </tr>`;
        btn.onclick = function() {
                modal.style.display = "block";
            }
        span.onclick = function() {
                modal.style.display = "none";
            }
        $('.table-add').on('click', 'i', () => {
           

            // When the user clicks on <span> (x), close the modal
            

            const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

            if ($tableID.find('tbody tr').length === 0) {

                $('tbody').append(newTr);
            }

                $tableID.find('table').append($clone);
        });

        $tableID.on('click', '.table-remove', function () {

            $(this).parents('tr').detach();
        });

       

      
    </script>
  </body>

</html>
<?php include 'share/footer.php' ; ?>

