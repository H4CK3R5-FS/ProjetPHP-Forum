<?php include('../../action/security.php'); include('../../action/userGetarticles.php');  ?>
<!DOCTYPE html>
<html lang="en">
<?php include('../includes/head.php'); ?>
<body>
    <?php include('../includes/navusertohome.php'); ?>
    <br><br>
    <div class="container" >
        <?php 
            while($articles = $getarticles->fetch()){
                ?>
                <div class="card">
                    <div class="card-header"> <?php echo $articles['titre'];?></div>
                    <div class="card-body">
                        <p class="card-text"><?php echo $articles['description'];?></p>
                        <a href="../otherPages/details.php?id=<?php echo $articles['id'];?>" class="btn btn-primary">Go to articles</a>
                        <a href="../otherPages/edit.php?id=<?php echo $articles['id'];?>" class="btn btn-warning">Modify article</a>
                        <a href="../system/delete.php?id=<?php echo $articles['id'];?>" class="btn btn-danger">Delete article</a>
                    </div>
                </div>
                <br>
                <?php
            }


        ?>
    </div>
</body>
</html>