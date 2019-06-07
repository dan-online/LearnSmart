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
            <h1>All Videos</h1>
            <div class="row" style="margin-bottom: 3rem !important">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../assets/images/C++.png" alt="VideoImageError">
                        <div class="card-body">
                        <h5 class="card-title">Video_1</h5>
                        <a href="../videos/C++/1.php" class="btn btn-primary">Start</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php

include('../main/footer.php');

?>