<?php session_start();
if(!isset($_SESSION['dem']))
{
    $_SESSION['dem'] = 1;
}else{
    $_SESSION['dem']++;
}
?>
<html>
    <head>
        <title>dem</title>
    </head>
    <body>
        <a href="back.php"><?php echo $_SESSION['dem']?> next</a>
    </body>
</html>