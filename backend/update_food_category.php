<?php
if (isset($_POST['delete_submit'])){
    $shop_id = $_POST['shop_id'];
    $food_category_id = $_POST['food_category_id'];
    include 'connect_database.php';
    $sql = "
        DELETE FROM Food_categories
        WHERE Food_category_id = '$food_category_id' and Shop_id = '$shop_id';                                                           
                            ";
    $result = $conn->query($sql);
}
if (isset($_POST['add_submit'])){
    $shop_id = $_POST['shop_id'];
    $chinese_name = $_POST['chinese_name'];
    $english_name = $_POST['english_name'];
    include 'connect_database.php';
    $sql = "
        INSERT INTO Food_categories(Shop_id, Chinese_name, English_name)
        VALUES('$shop_id', '$chinese_name', '$english_name');                                                           
                            ";
    $result = $conn->query($sql);
    $last_id = $conn->insert_id;

    echo $last_id;
}
