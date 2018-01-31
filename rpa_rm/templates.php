<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Templates</title>

    <!-- Bootstrap CSS -->
    <?php require_once('inc\css.inc.php'); ?>

    <!-- CSS for Templates.php  -->
    <link rel="stylesheet" href="css\templates.css">
    
    
  </head>
  <body>


<?php
    require_once 'header.php';
?>

<div class="container con">
    <div class="offset-2 col-8 text-center">
    <div class="h5">UPLOAD TEMPLATES</div>
    <div class="fileUpload btn">
    <input type="file" id="file"/>
    <button class="Upload btn btn-secondary" id="upload">Upload</button>
    </div>
    </div>

    <div class="row r2">
    <div class="offset-2 col-8">
    <ul class="list-group docs" id="docs-panel">
    
    </ul>
    </div>
    </div>
    </div>


     <?php
     require_once 'inc/js.inc.php'; 
     ?>
     <script src="scripts/templates.js"></script>

</body>
</html>