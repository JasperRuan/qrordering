<?php
include "connect_database.php";
if (isset($_POST['register_submit'])){
    $email = $conn->real_escape_string($_POST['register_email']);
    $name= $conn->real_escape_string($_POST['register_name']);
    $phone = $conn->real_escape_string($_POST['register_phone']);
    $password = $conn->real_escape_string($_POST['register_password']);
    $re_password = $conn->real_escape_string($_POST['register_re_password']) ;

    $emailError = false;
    $nameError = false;
    $phoneError = false;
    $passwordError = false;
    $re_passwordError = false;

    if ($re_password != $password) {
        $re_passwordError = true; #两次密码不一样
        echo '<span>Password不一样</span>';
    }
    else {
        $re_passwordError = false;
        $sql = "SELECT Email 
                FROM Shops 
                WHERE Email = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $emailError = true; #email已被注册
            echo '<span>Email has been registered</span>';
        }
        else {
            $v_code = $code = md5(uniqid($email, true));
            $sql = "INSERT INTO Shops(English_name, Email, Password, Phone, V_code)
                    VALUE ('$name', '$email', '$password', '$phone', '$v_code');
            ";
            $result = $conn->query($sql);
            echo 'An Email has been sent with an verification link';
            #发送邮件
            $to = $_POST['register_email'];
            $subject = "QR Order Activate Account";
            $txt = "Click the following link to activate your account\n\n
                https://qrordernz.com/backend/email_validation.php?code=".$v_code;
            $headers = "From: info@qrordernz.com" . "\r\n" .
                "CC: somebodyelse@example.com";
            mail($to,$subject,$txt,$headers);

        }
    }

} else {
    echo '<span>Something went wrong here</span>';
}

?>

<script>

    $("#register_email").removeClass("input_error");
    $("#register_password").removeClass("input_error");
    $("#register_re_password").removeClass("input_error");
    var errorEmail = "<?php echo $emailError;?>";
    var errorPassword = "<?php echo $re_passwordError;?>";
    if(errorEmail == true){
        $("#register_email").addClass("input_error");
    }
    if (errorPassword == true) {
        $("#register_password").addClass("input_error");
        $("#register_re_password").addClass("input_error");
    }
    if (errorPassword == false && errorEmail == false){
        message_element = document.getElementById('register_message');
        message_element.style.color = 'green';
        message_element.innerText = 'An email with a varification link is sent to your email';

    }


</script>

