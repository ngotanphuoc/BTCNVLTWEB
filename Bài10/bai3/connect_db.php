<?php 
    $connect= mysqli_connect("localhost","root","phuoc@2209");
    mysqli_select_db($connect, "taikhoan");
    mysqli_query($connect, "SET names 'utf8'");

    if(!$connect){
        echo "Không thể kết nối đến Database!".mysqli_connect_error($connect);
    }
?>