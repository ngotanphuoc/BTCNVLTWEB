<html>
    <head>
        <title>trang quan tri</title>
    </head>
    <body>
        <?php 
            if(isset($_COOKIE['username']) and isset($_COOKIE['password']))
            {
                echo "xin chao". $_COOKIE['username']. " mat khau la: ".$_COOKIE['password'];
            }else{
                echo "ban chua dang nhap";
            }
        ?>

        <a href="logout.php">thoat ra</a>
        
    </body>
</html>