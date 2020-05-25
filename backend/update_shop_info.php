<?php
$error = false;
if(isset($_POST['submit']) && isset($_COOKIE['qrorder_shop_id'])){
    $english_name = $_POST['english_name'];
    $chinese_name = $_POST['chinese_name'];
    $shop_id = $_COOKIE['qrorder_shop_id'];
    include "connect_database.php";
    $sql = "UPDATE Shops
            SET Chinese_name = '$chinese_name', English_name = '$english_name'
            WHERE Shop_id = '$shop_id';
            ";
    $result = $conn->query($sql);

    $cookie_name = 'qrorder_shop_id';
    $cookie_value = $shop_id;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 5), "/"); // 86400 = 1 day

    $cookie_name = 'qrorder_email';
    $cookie_value = $_COOKIE['qrorder_email'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 5), "/"); // 86400 = 1 day

    $cookie_name = 'qrorder_phone';
    $cookie_value = $_COOKIE['qrorder_phone'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 5), "/"); // 86400 = 1 day

    $cookie_name = 'qrorder_chinese_name';
    $cookie_value = $chinese_name;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 5), "/"); // 86400 = 1 day

    $cookie_name = 'qrorder_english_name';
    $cookie_value = $english_name;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 5), "/"); // 86400 = 1 day
}
else {
    header('location: https://www.qrordernz.com');
}
?>

<script>
    var error = "<?php echo $error; ?>";
    if (error == false){
        document.getElementById('profile_message').innerText = 'Profile Updated';
        document.getElementById('profile_message').style.visibility = 'visible';
        console.log("<?php echo $english_name ?>");
    }


</script>
