<?php session_start(); 

    if(!isset($_SESSION['name']))
    {
        $_SESSION['name'] = "Ngo Tan Phuoc";
        $_SESSION['age'] = 19;
    }
?>

<html>
    <head>
        <title>bai 1</title>
    </head>
    <body>
        <?php echo "Toi ten la: ".$_SESSION['name']."<br> Tuoi: ".$_SESSION['age']?>
    </body>
    <a href="huysession.php">Huy session</a>
</html>