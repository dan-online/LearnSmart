<!doctype html>
<html lang="en">
<head>
<style>
#editor {
    width: 500px;
    height: 400px;
}
</style>
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
  <select id="selected" onchange="load(this.options[this.selectedIndex].value)">
    <option selected>Javascript</option>
    <option>PHP</option>
    <option>CPP</option>
    <option>CSS</option>
    <option>HTML</option>
    <option>Java</option>
    <option>Json</option>
    <option>Markdown</option>
    <option>MySQL</option>
    <option>Python</option>
    <option>SQL</option>
  </select>
<div id="editor">some text</div>
<br>
<button class="btn btn-primary" onclick="saveFunction()">Save</button>
</div>
<script src="/1819dw/LearnSmart/assets/js/mirror.js"></script>


  <?php
  include('../main/footer.php');
  ?>
  <script src="ace.js" type="text/javascript" charset="utf-8"></script>
  <script id="script" src="mode-javascript.js" type="text/javascript" charset="utf-8"></script>
<script>
var editor = ace.edit("editor");
var JavaScriptMode = ace.require("ace/mode/javascript").Mode;
editor.session.setMode(new JavaScriptMode());

function load(name) {
  name = name.toLowerCase();
  //var script = document.createElement('script');
  //script.src= 'mode-' + name + '.js';
  //document.getElementsByTagName('head')[0].appendChild(script)
  //script.onload = function () {
    editor.session.setMode("ace/mode/" + name)
  //}
}
function saveFunction()
  {
    var name = prompt("What would you like to name this file?", "File Name");
    if (name != null && name != "File Name")
    {
      var array = {javascript: '.js', cpp: '.cpp', css: '.css', html: '.html', java: '.java', json: '.json', markdown: '.md', mysql: '.txt', php: '.php', python: '.py', sql: '.txt'}
      var x = editor.getValue();  
      var a = document.createElement("a");
      var file = new Blob([x], {type: "text/plain"});
      console.log(file);
      a.href = URL.createObjectURL(file);
      let ending = document.getElementById('selected').value;
      a.download = name + array[ending.toLowerCase()];
      a.click();
    }
    else
    {
      alert("Please set a valid name and extension for your file!");
    }
  }

</script>
</body>

</html>
