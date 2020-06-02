<?php
if (isset($_POST['update_submit'])){
    include 'connect_database.php';
    $shop_id = $_POST['shop_id'];
    $food_id = $_POST['food_id'];
    $food_category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $hide = $_POST['hide'];
    $sql = "UPDATE Foods
            SET Food_category_id = '$food_category_id', Price = '$price', Stock = '$stock', Hide = '$hide'
            WHERE Shop_id = '$shop_id' and Food_id = '$food_id';
            ";
    $result = $conn->query($sql);
}
if (isset($_POST['delete_submit'])){
    include 'connect_database.php';
    $shop_id = $_POST['shop_id'];
    $food_id = $_POST['food_id'];
    $sql = "
    DELETE FROM Foods
    WHERE Shop_id = '$shop_id' and Food_id = '$food_id';
            ";
    $result = $conn->query($sql);
}
if (isset($_POST['add_submit'])){
    include 'connect_database.php';
    $shop_id = $_POST['shop_id'];
    $chinese_name = $_POST['chinese_name'];
    $english_name = $_POST['english_name'];
    $food_category_id = $_POST['category'];
    $price = $_POST['price'];
    $sql = "
    INSERT INTO Foods(Shop_id, Chinese_name, English_name, Food_category_id, Price)
    VALUES('$shop_id', '$chinese_name', '$english_name', '$food_category_id', '$price')
            ";
    $result = $conn->query($sql);
    $last_id = $conn->insert_id;

    echo $last_id;
}