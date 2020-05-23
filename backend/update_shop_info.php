<?php
$error = false;
if(isset($_POST['submit'])){
    $english_name = $_POST['english_name'];
    $chinese_name = $_POST['chinese_name'];

}
else {
    echo 'something is wrong';
}
?>

<script>
    var error = "<?php echo $error; ?>";
    if (error == false){
        document.getElementById('profile_message').innerText = 'Profile Updated';
        document.getElementById('profile_message').style.visibility = 'visible'
        console.log("<?php echo $english_name ?>");
    }


</script>
