<!doctype html>
<html lang="en">
      
<?php
session_start();
include('../../main/database/access_control.php');
include('../../main/head.php');
include('../../main/navbar.php');
if ($access_control['logged_in'] == "no")
{
  header('location:../index.php');
}
?>
<body>



<div class="container main my-3">
    <form enctype="multipart/form-data" action="../../api/upload.php" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <input type="file" name="fileToUpload">
        <button type="submit" class="btn btn-primary">Yayeet</button>
    </form>
</div>


<?php
include('../../main/footer.php');
?>

</body>

</html>
