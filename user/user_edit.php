<!doctype html>
<html lang="en">
<?php 
include("../main/head.php");
include('../main/database/access_control.php');
include('../main/database/database_inc.php');
include('../main/navbar.php');
?>
<body>
<div class="container m-3 main"> <!-- open container -->
<?php 
    if ($access_control['logged_in'] == "no")
    {
    header('location:index.php');
?>

</div> <!-- /container -->

</main>


<?php
} else { 
?>
<div class="row my-2">
    <div class="col-12">
        <p>Edit a user<br />
        This page is only visible to logged-in users. We should change this so only a specific admin can see it. </p>
    </div>
</div>
   
<div class="row my-2">
    <div class="col-12">

<form action="user_edit_process.php" method="POST">

    <?php
        $id_to_edit = $_GET['id']; 
        $_SESSION['id_to_edit'] = $id_to_edit;

        $result = mysqli_query($connect,
        "SELECT * FROM `LearnSmart` WHERE id = $id_to_edit;");
        while ($row = mysqli_fetch_array($result))
        {             
    ?>

<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email1" aria-describedby="emailHelp" value="<?php echo $row['email']; ?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>


<div class="form-group">
    <label for="username">Username</label>
    <input type="username" name="username" class="form-control" id="username1" value="<?php echo $row['username']; ?>">
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password1">
</div>

<div class="form-group">
      <label for="role">Role</label>
      <select name="role" id="role" class="form-control">
        <option selected>Member</option>
        <option>Administrator</option>
        <option>Banned</option>
      </select>
    </div>


<button type="submit" class="btn btn-primary">Submit</button>


    <?php 
        }
    ?>
            </tbody>
            </table>
    </div>
</div>



  <hr>

</div> <!-- /container -->


<?php
}
?>

</div>  <!-- close container -->

<?php include('../main/footer.php') ?>

</html>
