<?php
define('HOST', 'localhost');
define('DATABASE', "phone'sstore");//Tên Database
define('USERNAME', 'root');//Username
define('PASSWORD', '');//Password
$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
define('ROOT',  dirname(__DIR__));

//echo 'Root=' .ROOT;exit;
?>