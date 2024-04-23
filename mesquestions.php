<?php ini_set('display_errors', 0); ?>
<?php include('ACTION/questionsofusers.php')?>
<?php require('ACTION/securitysignup.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include 'INCLUDES/head.php'; ?>
    <title>Document</title>
</head>
<body>
    <?php include 'INCLUDES/navbar.php'; ?>


    <?php 

    while($questions = $getallarticle->fetch()){
        ?>
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php print $questions['titre']; ?></h5>
    <p class="card-text"><?php print $questions['texte']; ?></p>
  </div>
  <?php
    }
?>
</div>
</body>
</html>