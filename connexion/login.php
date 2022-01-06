<!DOCTYPE html>
<html lang="en">
<?php require('../includes/head.php');?>
<?php require('../assets/style.php');?>
<?php require('../includes/navregister.php');?>
    <body>
        <br><br>
        <fieldset id="field1">
            <form class="container" method="POST">
                <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>' ;}?>
                <div class="mb-3">
                    <label  class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                
                <button type="submit" class="btn btn-primary" name="validate">sign up</button>
            </form>
        </fieldset>
    </body>
</html>