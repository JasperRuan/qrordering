<?php
$code = 'abcdefg';
$to = "hebowen360@gmail.com";
$subject = "QR Order Activate Account";
$txt = "Click the following link to activate your account\n\n
http://qrordernz.com/backend/email_validation.php?code=".$code;
$headers = "From: info@qrordernz.com" . "\r\n" .
    "CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>