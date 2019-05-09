<?php

// this file should be named database_inc.php

$connect = mysqli_connect('localhost','1819dw','1819dw87r4','1819dw');

// Check connection

if (mysqli_connect_errno())
{
echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}
?>