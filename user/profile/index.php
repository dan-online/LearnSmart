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

<?php

$result = mysqli_query($connect,
"SELECT * FROM `LearnSmart` WHERE unique_id LIKE '$unique_id_of_logged_in_user';");

while ($row = mysqli_fetch_array($result))
{
?>

<div class="container main my-3"> 
    <main role="main">
        <div class="container main">
            <div class="row">
            <?php if($_SESSION['saved']) {
                $_SESSION['saved'] = false;
                ?>
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Saved!</strong>
                    </div>
                </div>
                <?php } ?>
                <div class="col-12">
                    <form action="edit.php" method="POST">
                        <div class="form-group">
                            <label for="username"><h5>Username</h5></label>
                            <input type="username" name="username" class="form-control" id="username1" placeholder="<?php echo $access_control['username']; ?>">
                            <br><br>
                            <label for="password"><h5>Password</h5></label>
                            <input type="password" name="password" class="form-control" id="password1" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;">
                            <br><br>
                            <label for="coursePreference"><h5>Course Preference</h5></label><br>
                            <input type="checkbox" <?php if($row['compiled'] == 1) {echo 'checked';} ?> name="compiled" value="1"> Compiled Languages <br>
                            <input type="checkbox" <?php if($row['scripted'] == 1) {echo 'checked';} ?> name="scripted" value="1"> Scripted Languages <br>
                            <input type="checkbox" <?php if($row['interpreted'] == 1) {echo 'checked';} ?> name="interpreted" value="1"> Interpreted Languages <br>
                            <input type="checkbox" <?php if($row['ddl'] == 1) {echo 'checked';} ?> name="ddl" value="1"> Domain Declarative Languages <br>
                            <br><br>
                            <label for="level"><h5>Level of Knowledge</h5></label><br>
                            <input type="radio" <?php if($row['level'] == 'beginner') {echo 'checked';} ?> name="level" value="beginner"> Beginner <br>
                            <input type="radio" <?php if($row['level'] == 'intermediate') {echo 'checked';} ?> name="level" value="intermediate"> Intermediate <br>
                            <input type="radio" <?php if($row['level'] == 'advanced') {echo 'checked';} ?> name="level" value="advanced"> Advanced <br>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <button type="submit" onclick="<?php $result = mysqli_query($connect, "INSERT INTO `LearnSmart` (`level`, `compiled`, `interpreted`, `ddl`, `scripted`) VALUES (NULL, 0, 0, 0, 0);"); ?>" class="btn btn-primary">Reset Preferences</button>
                </div>
            </div>
        </div>
    </main>
</div>


<?php
}

include('../../main/footer.php');
?>

</body>

</html>
