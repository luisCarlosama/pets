<?php
    session_start();
    if (isset($_SESSION["id_user"])){
        header("location:home.php");
    }else{
        header("location:signin.php");
    }
?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pets - home</title>
</head>
<body>
    <a href = "index.html">Sign Out</a>

</body>
</html>