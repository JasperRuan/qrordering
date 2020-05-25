<?php
if (isset($_GET['code'])){
    include "connect_database.php";
    $code = $conn->real_escape_string($_GET['code']);
    $sql = "SELECT V_code, Verified
            FROM Shops 
            WHERE V_code = '$code' 
            ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $verified = null;
        while($row = $result->fetch_assoc()) {
            $verified = $row['Verified'];
        }
        if ($verified == 0){
            $sql = "UPDATE Shops
                SET Verified = 1
                WHERE V_code = '$code';
            ";
            $result = $conn->query($sql);
            header('Location: http://www.qrordernz.com/');
        }
        else {
            echo 'Account is already activate';
        }
    }
}
else {
    echo 'The link is invalid';
}
