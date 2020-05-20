<?php

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $emailError = false;
    $passwordError = false;
    if ($email == 'yes'){
        $emailError = false;

        if ($password == 'yes'){
            $passwordError = false;
        }else {
            $passwordError = true;
            echo '<span>Password Wrong</span>';
        }

    }
    else {
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
        window.location.href = "index.php";
    }




</script>
