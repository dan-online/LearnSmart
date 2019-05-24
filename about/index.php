<!doctype html>
<html lang="en">
      
<?php 
include('../main/database/access_control.php');
include('../main/head.php');
include('../main/navbar.php');
include('../main/database/access_control.php');
session_start();
?>
<body>

<div class="container main my-3"> <!-- open container -->

<main role="main">


<div class="container main">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://orestbrykowytch.github.io/assets/images/Favicon.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Orest Brykowytch</h5>
          <a href="https://orestbrykowytch.github.io" class="btn btn-primary">Meet Orest</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://dancodes.online/assets/images/me.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Daniel Wilson</h5>
          <a href="https://dancodes.online" class="btn btn-primary">Meet Daniel</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/1819dw/LearnSmart/assets/images/office.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Adam Whitmore</h5>
          <a href="https://github.com/Thiccmore" class="btn btn-primary">Meet Adam</a>
        </div>
      </div>
    </div>
  </div>

</main>


</div>


    <?php
    include('../main/footer.php');
    ?>
  </body>

</html>
