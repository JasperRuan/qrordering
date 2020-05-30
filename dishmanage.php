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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href = "share/header_main.css">
    
    <link rel="stylesheet" href="share/dishmanage.css">
    
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
                        <th class="text-center">菜品图片</th>
                        <th class="text-center">菜品名称</th>
                        <th class="text-center">菜单分类</th>
                        <th class="text-center">价格</th>
                        <th class="text-center">操作</th>
                        <th class="text-center">Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include 'backend/connect_database.php';
                    $sql = "
                    SELECT Food_category_id, Chinese_name, English_name
                    FROM Food_categories
                    WHERE Shop_id = '$shop_id'
                    ORDER BY 1
                            ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $food_category_array = array();
                        while($row = $result->fetch_assoc()) {
                            array_push($food_category_array, [strval($row['Food_category_id']), $row['Chinese_name'], $row['English_name']]);
                        }
                    }


                    $sql = "
                    SELECT Food_id, Chinese_name, English_name, Food_category_id, Price, Stock, Hide, Image_path
                    FROM Foods
                    WHERE Shop_id = '$shop_id'
                    ORDER BY Food_id
                            ";
                    $result = $conn->query($sql);
                    $count = 0;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $count = $count + 1;
                            $stock = $row['Stock'] == 1? '':'checked';
                            $hide = $row['Hide'] == 1? 'checked':'';
                            $option_text = '<option value="Others">请选择分类</option>';
                            foreach ($food_category_array as $option) {
                                if ($option[0] == $row['Food_category_id']){
                                    $option_text = $option_text . '<option selected id="food_category' . $option[0]. '" name="food_category'. $option[0]. '" value="'. $option[1]. '">';
                                    $option_text = $option_text. $option[1]. '</option>';
                                }
                                else {
                                    $option_text = $option_text . '<option id="food_category' . $option[0]. '" name="food_category'. $option[0]. '" value="'. $option[1]. '">';
                                    $option_text = $option_text. $option[1]. '</option>';
                                }
                            }
                            echo '
                            <tr id="row'. $row['Food_id'] .'">
   <form action="">
      <td class="pt-3-half"  width="10%">
         <img src="media/img/宫爆.jpg" alt="" width=100%>
      </td>
      <td class="pt-3-half" >
         <div class="content1">
            <h4>'. $row['Chinese_name'] .'</h4>
            <h5>'. $row['English_name'] .'</h5>
         </div>
      </td>
      <td class="pt-3-half" >
         <div class="content">
            <select id="select'. $row['Food_id'] .'"  name="select'. $row['Food_id'] .'" >
            '. $option_text.'
               
            </select>
         </div>
      </td>
      <td class="pt-3-half" >
         <div class="content">
            <span style="color: #265CBF;margin-right:3px">$</span><input id="price'. $row['Food_id'] .'" type="text" value="'. $row['Price'] .'" style="width:80px">
         </div>
      </td>
      <td class="pt-3-half" >
         <label class="checkbox">
         <input id="stock'. $row['Food_id'] .'" type="checkbox" '. $stock . '/>
         <span>标记缺货</span>
         </label>
         <label class="checkbox">
         <input id="hide'. $row['Food_id'] .'" type="checkbox" '. $stock . '/ >
         <span>隐藏菜品</span>
         </label>
      </td>
      <td id="control'. $row['Food_id'] .'">
         <span class="table-remove"><button type="button"
            class="btn btn-danger btn-rounded btn-sm my-0"  style="margin-bottom:5px !important">删除产品</button></span>
         </br>
         <span onclick="save_dish(this)"><button type="button"
            class="btn btn-danger btn-rounded btn-sm my-0" style="background-color:#007968!important;border-color: #007968!important">保存设置</button></span>
      </td>
   </form>
</tr>
                            ';

                        }
                    }
                    ?>
                    </tbody>
                </table>
                </div>

                <div id="myModal" class="modal">

<!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                            <div class="title" style="margin-bottom:25px">
                                添加菜品
                            </div>
                            <div class="neiron">
                                <form action="">
                                    <div class="catag">
                                        <div class="head">
                                            中文名字
                                        </div>
                                        <input type="text" id="add_chinese_name" required >

                                        
                                    </div>
                                    <div class="catag">
                                        <div class="head">
                                            英文名字
                                        </div>
                                        <input type="text" id="add_english_name" required>
                                    </div>
                                    <div class="catag">
                                        <div class="head">
                                            产品价格
                                        </div>
                                        <input type="text" id="add_price" required>
                                    </div>
                                    <div class="catag">
                                        <div class="head">
                                            菜单分类
                                        </div>
                                           <div class="dropdown show">
                                               <select id="add_category">
                                                   <option value="Others">请选择分类</option>
                                                   <?php
                                                   foreach ($food_category_array as $option) {
                                                       echo '<option value="'. $option[1] .'">'. $option[1] .'</option>';
                                                   }
                                                   ?>
                                               </select>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <div class="save-btn">
                                        <input type="button" class="btn btn-primary" value="添加" onclick="add_dish()">
                                    </div>
                                </form>
                            </div>
                    </div>

                    </div>
            </div>
            </div>
            <!-- Editable table -->
           
            
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
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
                modal.style.display = "block";
            }
        span.onclick = function() {
                modal.style.display = "none";
            }
        $('.table-add').on('click', 'i', () => {


        });

        $tableID.on('click', '.table-remove', function () {
            var item =$(this);
            var food_id = $(this).parents('tr')[0].id.slice(3);
            var shop_id = <?php echo $shop_id; ?>;
            $.ajax
            ({
                url: 'backend/update_dish.php',
                data: {
                    "shop_id": shop_id,
                    "food_id": food_id,
                    'delete_submit': 1
                },
                type: 'post',
                success: function(result)
                {
                    console.log('Delete food success');
                    item.parents('tr').detach();
                }
            });
        });

        function save_dish(item) {
            var shop_id = <?php echo $shop_id ?>;
            var food_category_array = <?php echo json_encode($food_category_array); ?>;
            var food_id = item.parentElement.id.slice(7);
            var stock = document.getElementById('stock'+food_id).checked? 0:1;
            var hide = document.getElementById('hide'+food_id).checked? 1:0;
            var price = document.getElementById('price'+food_id).value;

            var food_category = document.getElementById('select'+food_id).value;
            var category_id = null;
            var i;
            for (i = 0; i < food_category_array.length; i++) {
                if(food_category == food_category_array[i][1]){
                    console.log('find_category', food_category_array[i][0]);
                    category_id = food_category_array[i][0];
                }
            }
            var price_is_correct = true;
            //
            //
            // 加regular expression 测试price
            //
            //
            if (price_is_correct && category_id != null){
                $.ajax
                ({
                    url: 'backend/update_dish.php',
                    data: {
                        "shop_id": shop_id,
                        "food_id": food_id,
                        "stock": stock,
                        "hide": hide,
                        "price":price,
                        "category_id": category_id,
                        'update_submit': 1
                    },
                    type: 'post',
                    success: function(result)
                    {

                        console.log('dish update success')
                    }
                });


            }
            else {
                console.log('NOT going to save');
                if (category_id == null){
                    document.getElementById('select'+food_id).style.border = '1px solid red';
                }
                if (price_is_correct == false){
                    document.getElementById('price'+food_id).style.border = '1px solid red';
                }
            }

        }

        function add_dish(){
            var shop_id = <?php echo $shop_id; ?>;
            var food_category_array = <?php echo json_encode($food_category_array); ?>;
            var price = document.getElementById('add_price').value;
            var english_name = document.getElementById('add_english_name').value;
            var chinese_name = document.getElementById('add_chinese_name').value;
            var category = document.getElementById('add_category').value;
            var category_id = null;
            var i;
            for (i = 0; i < food_category_array.length; i++) {
                if(category == food_category_array[i][1]){
                    console.log('find_category', food_category_array[i][0]);
                    category_id = food_category_array[i][0];
                }
            }
            $.ajax
            ({
                url: 'backend/update_dish.php',
                data: {
                    "shop_id": shop_id,
                    "price": price,
                    "english_name": english_name,
                    "chinese_name": chinese_name,
                    "category": category_id,
                    'add_submit': 1
                },
                type: 'post',
                success: function(result)
                {
                    var last_food_id = result;
                    document.getElementById('myModal').style.display = 'none';
                    console.log('dish add success');
                    var insert_code = '<tr id="row8">\n' +
                        '   <form action=""></form>\n' +
                        '   <td class="pt-3-half" width="10%">\n' +
                        '      <img src="media/img/宫爆.jpg" alt="" width="100%">\n' +
                        '   </td>\n' +
                        '   <td class="pt-3-half">\n' +
                        '      <div class="content1">\n' +
                        '         <h4>宫保鸡丁</h4>\n' +
                        '         <h5>Spicy Chicken</h5>\n' +
                        '      </div>\n' +
                        '   </td>\n' +
                        '   <td class="pt-3-half">\n' +
                        '      <div class="content">\n' +
                        '         <select id="select8" name="select8">\n' +
                        '            <option value="Others">请选择分类</option>\n' +
                        '            <option selected="" id="food_category68" name="food_category68" value="鸡肉">鸡肉</option>\n' +
                        '            <option id="food_category69" name="food_category69" value="猪肉">猪肉</option>\n' +
                        '            <option id="food_category71" name="food_category71" value="牛肉">牛肉</option>\n' +
                        '         </select>\n' +
                        '      </div>\n' +
                        '   </td>\n' +
                        '   <td class="pt-3-half">\n' +
                        '      <div class="content">\n' +
                        '         <span style="color: #265CBF;margin-right:3px">$</span><input id="price8" type="text" value="40.99" style="width:80px">\n' +
                        '      </div>\n' +
                        '   </td>\n' +
                        '   <td class="pt-3-half">\n' +
                        '      <label class="checkbox">\n' +
                        '      <input id="stock8" type="checkbox">\n' +
                        '      <span>标记缺货</span>\n' +
                        '      </label>\n' +
                        '      <label class="checkbox">\n' +
                        '      <input id="hide8" type="checkbox">\n' +
                        '      <span>隐藏菜品</span>\n' +
                        '      </label>\n' +
                        '   </td>\n' +
                        '   <td id="control8">\n' +
                        '      <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0" style="margin-bottom:5px !important">删除产品</button></span>\n' +
                        '      <br>\n' +
                        '      <span onclick="save_dish(this)"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0" style="background-color:#007968!important;border-color: #007968!important">保存设置</button></span>\n' +
                        '   </td>\n' +
                        '</tr>';
                    $( insert_code ).insertAfter( "#row9" );
                }
            });
        }

       

      
    </script>
  </body>

</html>
<?php include 'share/footer.php' ; ?>

