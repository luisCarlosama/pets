<?php
//Datebase configuration
$host      = 'localhost'; //=>127.0.0.1
$dbname    = 'pets';
$username  = 'postgres';
$password  = 'unicesmag';
$port      = '5432';

$conn = pg_connect(     
    "host=$host 
     dbname=$dbname 
     user=$username
     password=$password
     port=$port");
     if (!$conn) {
        die("connect error". preg_last_error());
     } 
     else { 
        echo"Success !!! ";
     }




?>