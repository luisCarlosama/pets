<?php
    $fullname = $_POST['fname'];
    $email = $_POST['email'];
    $passwd  = $_POST['passwd'];
    $enc_pass = md5($passwd);

    echo "Your full name: ". $fullname. "<br>";
    echo "Your email: ". $email."<br>";
    echo "Your password: ". $passwd. "<br>";






?>