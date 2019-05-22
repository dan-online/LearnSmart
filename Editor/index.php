<!doctype html>
<html lang="en">
<?php 
include('../main/database/access_control.php');
include("../main/head.php");
include('../main/navbar.php');
?>
<body>
<div class="container main">
<textarea onkeyup="syntax(this.value)" style="width:100%; height:40%">

</textarea>
</div>
<script>
function syntax(value) {
  console.log(value)
}

</script>
<?php
    include('../main/footer.php');
    ?>
  </body>

</html>
