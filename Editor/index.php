<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="/1819dw/LearnSmart/assets/css/mirror.css">
</head>
<?php 
include('../main/database/access_control.php');
include('../main/head.php');
include('../main/navbar.php');
session_start();
if ($access_control['logged_in'] != "yes")
{
  header('location:../index.php');
}
?>
<body>
<div class="container main">
  
<textarea id="area" style="width:100%; height:40%">

</textarea>
<br>
<button class="btn btn-primary" onclick="saveFunction()">Save</button>
</div>
<script src="/1819dw/LearnSmart/assets/js/mirror.js"></script>
<script>

var editor = CodeMirror.fromTextArea(document.getElementById("area"),
{
  lineNumbers: true,
  styleActiveLine: true,
  matchBrackets: true,
  theme: 'ambience',
  value: "function myScript(){return 100;}\n",
  mode:  "default"
});


  function saveFunction()
  {
    var name = prompt("What would you like to name this file? Include extension, please!", "fileName.fileType");
    if (name != null && name != "fileName.fileType")
    {
      var x = document.getElementById("area").value;  
      var a = document.createElement("a");
      var file = new Blob([x], {type: "text/plain"});
      console.log(file);
      a.href = URL.createObjectURL(file);
      a.download = name;
      a.click();
    }
    else
    {
      alert("Please set a valid name and extension for your file!");
    }
  }

  </script>

  <?php
  include('../main/footer.php');
  ?>
</body>

</html>
