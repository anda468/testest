<?php ini_set('display_errors', 0); ?>
<?php require('ACTION/publisharticleaction.php'); ?>
<?php require('ACTION/securitysignup.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'INCLUDES/head.php'; ?>
    <?php include 'INCLUDES/navbar.php' ?>
</head>
<body>
<br>
    <form class="container" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom de l'article</label>
        <input type="text" class="form-control" name="title">

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Texte de l'article</label>
        <textarea type="text" class="form-control" name="text"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="publier">Publier l'article</button>
   <?php if(isset($errormsg)){
    echo '<center><p>' . $errormsg . '</p></center>';
} ?>
<?php if(isset($succes)){
    echo '<center><p>' . $succes . '</p></center>';
    echo'<center>Retourner sur la page des <a href="mesquestions.php">articles</a></center>'; 
} ?>
</form>
</body>
</html>