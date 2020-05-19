<?php

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $emailError = false;
    $passwordError = false;
    if ($email == 'yes'){
        $emailError = false;
    }
    else {
        $emailError = true;
    }
    if ($password = 'yes'){
        $passwordError = false;
    }else {
        $passwordError = true;
    }
    if ($passwordError == false && $emailError == false){
        
    }

} else {
    echo '<span>Something went wrong here</span>';
}