<?php
    session_start();
    if(isset($_SESSION["id_user"])){
        //header("Location:home.php");
        header("refresh:0;url=home.php");
        exit;
    }       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets | New user</title>
    <link rel="icon" type="icon/png" href="../pets/src/icon/png-transparent-logo-petshop-pet-store.png ">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <center>
        <img src="imagen/images (1)22.png" width="50">
    

    <form action="backend/signin.php" method="post">
        <table border="0" align="center"> 
                <div>
                    <tr><td><input type="text"name="email" placeholder="carlosam@gmail.com" required> </td></tr>
                    <tr></tr>
                    <tr><td><input type="text"  name="passwd" placeholder="*********" required> </td></tr>
                    <td></td><td></td>
                    <tr><td align="center"><button>Login</button></td>
                    <tr><td align="center"><a href="signup.html">Create an acount</button></td>
                </div>      
        </table>
    </form>
</center>
    
</body>
</html>