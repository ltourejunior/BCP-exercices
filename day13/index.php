<?php
require_once('var_show.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forms</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <nav>
            <a href="index.php">home</a>
            <a href="index.php?page=form">Show the form</a>
            <a href="index.php?page=contact">Contact</a>
        </nav>

        
        <?php if(isset($_GET['page']) && $_GET['page']=='form'): ?>
            <?php include('form.php'); ?>
        
        <?php else : ?>
            This is home.
        <?php endif; ?>

       <hr>         
    
    </body>
</html>