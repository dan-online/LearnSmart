<!doctype html>
<html lang="en">
      
<?php 
include("main/head.php");
include('main/navbar.php');
include('main/database/access_control.php');
?>
<body>

<div style="margin-top: 7rem !important" class="container main my-3"> <!-- open container -->

<?php 
session_start();

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
if ($access_control['logged_in'] == "no") {
?>

 <main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Hello, logged-out user!!</h1>
    <p>This will be shown to LOGGED OUT users. </p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/1819dw/LearnSmart/assets/images/office.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Orest Brykowytch</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/1819dw/LearnSmart/assets/images/globe.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Daniel Wilson</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/1819dw/LearnSmart/assets/images/arrow.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Adam Whitmore</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

</main>


<?php
} else { 
location('header:./home/');
}
?>

</div>


    <?php
    include('main/footer.php');
    ?>
  </body>

</html>
