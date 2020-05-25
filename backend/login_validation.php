<?php
include "connect_database.php";
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $emailError = false;
    $passwordError = false;
    $sql = "SELECT Shop_id, Chinese_name, English_name, Email, Password, Phone, Address, Verified 
            FROM Shops 
            WHERE Verified = 1 and Email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $emailError = false;
        while($row = $result->fetch_assoc()) {
            $shop_id = $row['Shop_id'];
            $chinese_name = $row['Chinese_name'];
            $english_name = $row['English_name'];
            $psw = $row['Password'];
            $phone = $row['Phone'];
            $address = $row['Address'];
        }
        if ($psw == $password){
            $passwordError = false;
            #登陆成功
            $cookie_name = 'qrorder_shop_id';
            $cookie_value = $shop_id;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 5), "/"); // 86400 = 1 day

            $cookie_name = 'qrorder_chinese_name';
            $cookie_value = $chinese_name;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 5), "/"); // 86400 = 1 day

            $cookie_name = 'qrorder_english_name';
            $cookie_value = $english_name;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 5), "/"); // 86400 = 1 day

            $cookie_name = 'qrorder_phone';
            $cookie_value = $phone;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 5), "/"); // 86400 = 1 day

            $cookie_name = 'qrorder_email';
            $cookie_value = $email;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 5), "/"); // 86400 = 1 day
        }
        else {
            $passwordError = true;
            echo '<span>Password Wrong</span>';
        }
    } else {
        $emailError = true;
        echo '<span>Email wrong</span>';
    }
} else {
    echo '<span>Something went wrong here</span>';
}

?>

<script>

    $("#login_email").removeClass("input_error");
    $("#login_password").removeClass("input_error");
    var errorEmail = "<?php echo $emailError;?>";
    var errorPassword = "<?php echo $passwordError;?>";
    if(errorEmail == true){
        $("#login_email").addClass("input_error");
    }
    if (errorPassword == true) {
        $("#login_password").addClass("input_error");
    }
    if (errorPassword == false && errorEmail == false){
        message_element = document.getElementById('login_message');
        message_element.style.color = 'green';
        message_element.innerText = 'Successfully logged in';
        window.location.href = "profile.php";
    }

</script>
