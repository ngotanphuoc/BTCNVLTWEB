<?php 
session_start();
unset($_SESSION['name']);
?>
<html>
    <head>
        <title>Huy session</title>
    </head>
    <body>
        
            <?php echo "Toi ten la: ".$_SESSION['name']."<br> Tuoi: ".$_SESSION['age']?>
       
    </body>
</html>