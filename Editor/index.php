<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="/1819dw/LearnSmart/assets/css/mirror.css">
</head>
<?php 
include('../main/database/access_control.php');
include("../main/head.php");
include('../main/navbar.php');
?>
<body>
<div class="container main">
<textarea id="area" style="width:100%; height:40%">

</textarea>
</div>
<script src="/1819dw/LearnSmart/assets/js/mirror.js"></script>s
<script>

/*var editor = CodeMirror.fromTextArea(document.getElementById('area'), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true,
    theme: 'ambience'
  });*/

var editor = CodeMirror.fromTextArea(document.getElementById("area"), {
  lineNumbers: true,
  styleActiveLine: true,
  matchBrackets: true,
  theme: 'ambience',
  value: "function myScript(){return 100;}\n",
  mode:  "javascript"
});


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
