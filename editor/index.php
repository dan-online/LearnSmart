<!doctype html>
<html lang="en">
<head>
<style>
#editor
{
    width: 100%;
    height: 500px;
}
.ace_print-margin {
  display: none !important
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
    <option>C++</option>
    <option>CSS</option>
    <option>HTML</option>
    <option>Java</option>
    <option>JSON</option>
    <option>Markdown</option>
    <option>MySQL</option>
    <option>Python</option>
    <option>SQL</option>
  </select>
  Auto-Save: <input id="auto" onclick="if(this.value != 'true') {this.value = 'true'} else {this.value = ''}" type="checkbox">
  <div class="row">
    <div class="col-12">
      <div id="editor"></div>
    </div>
  </div>

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
// Editor Settings and stuff  
var editor = ace.edit("editor");
var JavaScriptMode = ace.require("ace/mode/javascript").Mode;
editor.session.setMode(new JavaScriptMode());

function getSave() {
  if(localStorage.save) {
    var prompt = confirm('Would you like to use your auto-save?');
    if(prompt) {
      editor.setValue(localStorage.save, -1);
      document.getElementById('auto').click();
    }
  }
}

getSave();

editor.getSession().on('change', function() {
  save()
});

function save() {
  if(document.getElementById('auto').value != 'true') return;
  var value = editor.getValue();
  localStorage.save = value;
}


function load(name)
{
  name = name.toLowerCase();
  editor.session.setMode("ace/mode/" + name);
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
