<!doctype html>
<html lang="en">
      
<?php 
include('../main/database/access_control.php');
include('../main/head.php');
include('../main/navbar.php');
include('../main/database/access_control.php');
?>
<body>

<div class="container main my-3"> <!-- open container -->

<?php 
session_start();
?>

<main role="main">


<div class="container main">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/1819dw/LearnSmart/assets/images/office.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Orest Brykowytch</h5>
          <a href="https://orestbrykowytch.github.io" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/1819dw/LearnSmart/assets/images/globe.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Daniel Wilson</h5>
          <a href="https://orestbrykowytch.github.io" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/1819dw/LearnSmart/assets/images/arrow.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Adam Whitmore</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

</main>


</div>


    <?php
    include('main/footer.php');
    ?>
  </body>

</html>
