<?php

if (isset($_POST['register_submit'])){
    $email = $_POST['register_email'];
    $name= $_POST['register_name'];
    $phone = $_POST['register_phone'];
    $password = $_POST['register_password'];
    $re_password = $_POST['register_re_password'];

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
        if ($email == 'yes'){
            $emailError = true; #email已被注册
            echo '<span>Email has been registered</span>';
        }
        else {
            $emailError = false;
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

