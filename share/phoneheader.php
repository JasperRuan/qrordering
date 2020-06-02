<!DOCTYPE html>
<!-- saved from url=(0048)https://webzilla.co.nz/covid/customer_record.php -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <style>
        a {
            text-decoration: none;
            color: black;
        }
        body {
            margin: 0;
        }
        .header_container {
            border-bottom: 4px solid #086AD8;
            background: white;
        }
        .header_main {
            width: 100%;
            margin: 0;
            display: flex;
        }
        .header_main .header_logo {
            padding: 5%;
            width: 80%;
            overflow: hidden;
        }
        .header_main .header_logo img {
            width: 100%;
        }
        .header_main .menu_icon {
            width: 40%;
            overflow: hidden;
            text-align: right;
            padding: 5%;
        }
        .header_main .menu_icon img {
            width: 30%;
        }
        .menu_drawer {
            width: 100%;
            display: none;
        }
        .menu_drawer .menu_drawer_item {
            text-align: center;
            margin-bottom: 10px;
        }
        .menu_drawer .menu_drawer_item .menu_drawer_item_icon {
            width: 20%;
            text-align: right;
        }
        .menu_drawer_item_icon img{
            width:30px;
            height:30px;
        }
        .menu_drawer .menu_drawer_item .menu_drawer_item_text {
            width: 70%;
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class="header_container">
    <div class="header_main">

            <div class="header_logo">
                <a href="register.php"><img src="media/img/logo_long.jpg"></a>
            </div>

        <div class="menu_icon" onclick="show_menu()">
            <img src="media/img/汉堡.png">
        </div>
    </div>
    <div class="menu_drawer" id="menu_drawer" style="display: none">
        <a href="orderPhone.php">
            <div class="menu_drawer_item">
                  <span class="menu_drawer_item_icon">
                  <img src="media/img/查看订单.png">
                  </span>
                <span class="menu_drawer_item_text">
                  查看订单
                  </span>
            </div>
        </a>
        <a href="orderHistoryPhone.php">
            <div class="menu_drawer_item">
                  <span class="menu_drawer_item_icon">
                  <img src="media/img/历史订单.png">
                  </span>
                <span class="menu_drawer_item_text">
                  历史订单
                  </span>
            </div>
        </a>
        <a href="dishmanagePhone.php">
            <div class="menu_drawer_item">
                  <span class="menu_drawer_item_icon">
                  <img src="media/img/菜品管理.png">
                  </span>
                <span class="menu_drawer_item_text">
                  菜品管理
                  </span>
            </div>
        </a>
        <a href="logoff.php" style="display: <?php if(!isset($_COOKIE['shop_id'])){echo 'none';} ?>">
            <div class="menu_drawer_item">
                  <span class="menu_drawer_item_icon">
                  <img src="./hello_files/logoff.jpg">
                  </span>
                <span class="menu_drawer_item_text">
                  退出登录
                  </span>
            </div>
        </a>
    </div>
</div>
</body>
<script>
    function show_menu() {
        var x = document.getElementById("menu_drawer");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }

    }
</script>
</html>