<?php

require_once('functions.php');
require_once('my-functions.php');
//get_names()
//get_ratings
//get_name()
//get_rating

//isset($_GET['id']){
if(isset($_GET['id'])){
    $unique_id =$_GET['id'];
}

// get id from the url's GET parameters




?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo get_name($unique_id); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <nav>
            <a href="list.php">A list of movies</a>
        </nav>

        <?php if (isset($unique_id)) :?>
        <h1><?php echo get_name($unique_id); ?></h1>

        <div class="rating">
            Rating: <strong><?php echo get_rating($unique_id); ?></strong>
        </div> 

        <?php else : ?>
            Sorry, page not found.
        <?php endif; ?>
    
    </body>
</html>