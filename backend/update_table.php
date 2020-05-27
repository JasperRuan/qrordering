<?php
if (isset($_POST['update_submit'])){
    include 'connect_database.php';
    $shop_id = $_POST['shop_id'];
    $default_name = $_POST['default_name'];
    $prefer_name = $conn->real_escape_string($_POST['prefer_name']);
    $sql = "UPDATE Tables
            SET Prefer_name = '$prefer_name'
            WHERE Shop_id = '$shop_id' and Default_name = '$default_name';
            ";
    $result = $conn->query($sql);
}
if (isset($_POST['add_submit'])){
    include 'connect_database.php';
    $shop_id = $_POST['shop_id'];
    $default_name = $_POST['default_name'];
    $sql = "INSERT INTO Tables (Shop_id, Default_name)
            VALUES ('$shop_id', '$default_name')
            ";
    $result = $conn->query($sql);
}


?>

