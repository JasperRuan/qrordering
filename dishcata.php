<?php include 'share/header_main.php' ;
if (isset($_COOKIE['qrorder_shop_id'])) {
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
                    <tr id="first_row">

                        <th class="text-center">产品分类管理</th>
                        <th class="text-center">Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include 'backend/connect_database.php';
                    $current_index = 1;
                    $sql = "SELECT Food_category_id, Chinese_name, English_name
                            FROM Food_categories
                            WHERE Shop_id = '$shop_id'
                            ORDER BY 1
                            ";
                    $result = $conn->query($sql);
                    $last_food_category_id = 0;
                    if ($result->num_rows > 0) {

                        while($row = $result->fetch_assoc()) {
                            $last_food_category_id = $row['Food_category_id'];
                            echo '<tr id="row'. $row['Food_category_id'] .'">
                        <div>

                            <td class="pt-3-half" >
                                <div class="content1" >
                                    <p>'. $row['Chinese_name'] .'('. $row['English_name'] .')</p>
                                </div>
                            </td>
                            <td>
                                    <span class="table-remove" id="'. $row['Food_category_id'] .'"><button type="button"
                                        class="btn btn-danger btn-rounded btn-sm my-0"  style="margin-bottom:5px !important">删除产品</button></span>
                                    </br>
                            </td>
                        </div>
                    </tr>';
                            $current_index = $current_index + 1;
                        }
                    }

                    ?>

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
                                    <input type="text" required  id="chinese_name">

                                    
                                </div>
                                <div class="catag">
                                    <div class="head">
                                        英文名字
                                    </div>
                                    <input type="text" required id="english_name">

                                    
                                </div>
                                <div class="save-btn">
                                    <input type="button" class="btn btn-primary add_btn" value="添加" id="add_btn">
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
        var last_food_category_id = <?php echo $last_food_category_id; ?>;
        var current_food_category_id = 0;
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

        document.getElementById('add_btn').onclick = function() {
            var chinese_name = document.getElementById('chinese_name').value;
            var english_name = document.getElementById('english_name').value;
            var shop_id = <?php echo $shop_id; ?>;
            $.ajax
            ({
                url: 'backend/update_food_category.php',
                data: {
                    "shop_id": shop_id,
                    "chinese_name": chinese_name,
                    "english_name": english_name,
                    'add_submit': 1
                },
                type: 'post',
                success: function(result)
                {
                    var chinese_name = document.getElementById('chinese_name').value;
                    document.getElementById('chinese_name').value = '';
                    var english_name = document.getElementById('english_name').value;
                    document.getElementById('english_name').value = '';
                    current_food_category_id = result;

                    document.getElementById("myModal").style.display = "none";
                    var insert_code = '<tr id="row' + current_food_category_id +'">\n' +
                        '   <form action="">\n' +
                        '      <td class="pt-3-half" >\n' +
                        '         <div class="content1" >\n' +
                        '            <p>\n' +
                        '               '+ chinese_name + '('+ english_name +')\n' +
                        '            </p>\n' +
                        '         </div>\n' +
                        '      </td>\n' +
                        '      <td>\n' +
                        '         <span class="table-remove" id="'+ current_food_category_id + '"><button type="button"\n' +
                        '            class="btn btn-danger btn-rounded btn-sm my-0"  style="margin-bottom:5px !important">删除产品</button></span>\n' +
                        '         </br>\n' +
                        '      </td>\n' +
                        '   </form>\n' +
                        '</tr>';
                    if (last_food_category_id == 0){
                        $( insert_code ).insertAfter( "#first_row" );
                    }
                    else {
                        if (document.getElementById("row"+ last_food_category_id)){
                            $( insert_code ).insertAfter( "#row"+ last_food_category_id );
                        }
                        else {
                            location.reload();
                        }
                    } // 改内容!!!!!!!!!!!!!!!!!!!!!

                    last_food_category_id = current_food_category_id;
                    console.log('add cate');
                }
            });
        };

        $tableID.on('click', '.table-remove', function () {
            var shop_id = <?php echo $shop_id; ?>;
            var item = $(this);
            item.parents('tr').detach();
            var food_category_id = item[0].id;
            console.log('test: ', item[0]);
            console.log('food cate id: '+food_category_id);
            //delete the category from database
            $.ajax
            ({
                url: 'backend/update_food_category.php',
                data: {
                    "shop_id": shop_id,
                    "food_category_id": food_category_id,
                    'delete_submit': 1
                },
                type: 'post',
                success: function(result)
                {
                    console.log('delete_succ')
                }
            });
        });

      
    </script>
  </body>

</html>
<?php include 'share/footer.php' ; ?>

