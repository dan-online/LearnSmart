<?php
session_start();
include("../../main/database/database_inc.php");
include("../../main/database/access_control.php");

$compiled = $_POST['compiled'];
$interpreted = $_POST['interpreted'];
$ddl = $_POST['ddl'];
$scripted = $_POST['scripted'];
$level = $_POST['level'];




$result = mysqli_query($connect, "UPDATE LearnSmart SET level = '$level', compiled = '$compiled', interpreted = '$interpreted', ddl = '$ddl', scripted = '$scripted' WHERE unique_id = '$unique_id_of_logged_in_user';");
if($result) {
    echo $result;
}
echo '<pre><code>';
print_r(get_defined_vars()); 
echo '</pre></code>';
$_SESSION['saved'] = true;
header('location:index.php');

?>