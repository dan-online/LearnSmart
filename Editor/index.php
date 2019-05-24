<!doctype html>
<html lang="en">
<?php 
include('../main/database/access_control.php');
include("../main/head.php");
include('../main/navbar.php');
?>
<body>
  <div class="container main">
    <textarea id="codeEditor" onkeyup="syntax(this.value)" style="width:100%; height:40%"></textarea>
    <button onclick="saveFunction()">Click</button>
  </div>
  <script>

  function syntax(value) 
  {
    console.log(value);
  }

  function saveFunction()
  {
    var x = document.getElementById("codeEditor").value;  
    var a = document.createElement("a");
    var file = new Blob([x], {type: "text/plain"});
    console.log(file);
    a.href = URL.createObjectURL(file);
    a.download = "yourCode.txt";
    a.click();
  }

  </script>

  <?php
  include('../main/footer.php');
  ?>
</body>

</html>
