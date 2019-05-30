<!doctype html>
<html lang="en">
      
<?php 
session_start();
include('../main/database/access_control.php');
include('../main/head.php');
include('../main/navbar.php');
if ($access_control['logged_in'] != "yes")
{
  header('location:../index.php');
}
?>
    <body>
        <div style="margin-top: 7rem !important" class="container main my-3"> <!-- open container -->
            <h1>Your Dashboard</h1>
            
        </div>
    </body>
</html>
<?php


include('../main/footer.php');

?>