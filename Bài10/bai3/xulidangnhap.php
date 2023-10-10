<?php 
    session_start();
    if($_POST['login'])
    {
        include('../bai3/connect_db.php');
        $name = $_POST['username'];
        $pass = $_POST['pass'];
        $sql = "select * from taikhoanuser where taikhoan = '".$name."' and matkhau = '".$pass."'";
        $result= mysqli_query($connect, $sql);
        $row= mysqli_fetch_assoc($result);
        $kt= mysqli_num_rows($result);

        if($kt > 0)
        {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['pass'] = $_POST['pass'];

            if(isset($_POST['remember']) and ($_POST['remember']=="on")){
                setcookie("username", $name, time() + 60);
                setcookie("password", $pass, time() + 60);
            }

            echo "<script>alert('dang nhap thanh cong'); location.href='trangquantri.php';</script>";
        
        }
    }
?>