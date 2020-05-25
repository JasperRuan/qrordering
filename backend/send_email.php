<?php
function send_email(){
    $code = 'abcdefg';
    $to = "jasperruannz@gmail.com";
    $subject = "QR Order Activate Account2";
    $txt = "Click the following link to activate your account\n\n
http://qrordernz.com/backend/email_validation.php?code=".$code;
    $headers = "From: info@qrordernz.com" . "\r\n" .
        "CC: somebodyelse@example.com";

    mail($to,$subject,$txt,$headers);
}
?>