<!doctype html>
<html lang="en">
      
<?php
session_start();
include('../../main/database/access_control.php');
include('../../main/head.php');
include('../../main/navbar.php');
if ($access_control['logged_in'] != "yes")
{
  header('location:../../index.php');
}
?>
    <body>
        <div class="container main">
            <div class="row">
                <div class="col-sm-12">
                    <video style="width:100%; height:100%;" src="1.mp4" controls="true"></video>
                </div>
            </div>
        </div>
    </body>
</html>
<?php

include('../main/footer.php');

?>