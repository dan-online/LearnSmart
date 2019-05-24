<!doctype html>
<html lang="en">
<?php 
include('main/database/access_control.php');
include("main/head.php");
include('main/navbar.php');
?>
<body>

<div class="container main my-3"> <!-- open container -->

<?php 

if($_SESSION['registered_success']) {
  ?>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Your account has been created.</strong> Go ahead and <a href="login.php">login</a> like the rockstar you are.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php
unset($_SESSION['registered_success']);
}
?>

 <main role="main">


</main>


</div>


    <?php
    include('main/footer.php');
    ?>
  </body>

</html>
