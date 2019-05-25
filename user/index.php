<!-- Dashboard -->
<?php
session_start();
if ($access_control['logged_in'] != "yes")
{
  header('location:../index.php');
}
?>


<?php
include("../main/footer.php");
?>