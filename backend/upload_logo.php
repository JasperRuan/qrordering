<?php

/* Getting file name */
$filename = $_FILES['file']['name'];

/* Location */
$uni_id = md5(uniqid($_COOKIE['qrorder_email'], true));
$location = "../media/customer_image/logo/".$uni_id.'.jpg';
$logo_path = "media/customer_image/logo/".$uni_id.'.jpg';
$uploadOk = 1;
$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);

/* Valid Extensions */
$valid_extensions = array("jpg","jpeg","png");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
    $uploadOk = 0;
}

if($uploadOk == 0){
    echo 0;
}else{
    /* Upload file */
    if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
        echo $location;
    }else{
        echo 0;
    }
}

include "connect_database.php";
$shop_id = $_COOKIE['qrorder_shop_id'];
$sql = "SELECT Logo_path
            FROM Logos
            WHERE Shop_id = '$shop_id'
            ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $sql = "UPDATE Logos
            SET Logo_path = '$logo_path'
            WHERE Shop_id = '$shop_id';
            ";
    $result = $conn->query($sql);
}
else {
    $sql = "INSERT INTO Logos (Shop_id, Logo_path)
            VALUES ('$shop_id', '$logo_path');
            ";
    $result = $conn->query($sql);
}

?>

