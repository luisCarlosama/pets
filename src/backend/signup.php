<?php

include ('../../config/database.php');

$fullname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['passwd'];
$enc_pass = md5($password);

$sql_vaidate_email = "SELECT * FROM users WHERE email = '$email'";
$result = pg_query($conn, $sql_vaidate_email);
$total = pg_num_rows($result);

if ($total > 0) {
    echo "<script>alert('User has been registered')</script>";
    header("refresh:0;url=../signin.html");

} else {
    $sql = "
    INSERT INTO users (fullname, email, password) 
        VALUES ('$fullname', '$email','$enc_pass')
        ";

    $ans = pg_query($conn, $sql);
    if ($ans) {
        echo "User has been created successfully";
        header("refresh:0;url=../signin.html");
    } else {
        echo "Error: " . pg_last_error();
    }
}
//Close connection
pg_close($conn)
    ?>