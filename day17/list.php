<?php

require_once('functions.php');
require_once('my-functions.php');
//get_names()
//get_ratings
//get_name()
//get_rating


$unique_id = 'tt0167260';

$all_the_names = get_names();
$ids_of_movies = array_keys($all_the_names)
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php foreach($ids_of_movies as $unique_id) : ?>

            <h1><?php echo get_name($unique_id); ?></h1>

            <div class="rating">
            Rating: <strong><?php echo get_rating($unique_id); ?></strong>
            </div> 

            <a href="movie.php?id=<?php echo $unique_id ?>">Details of the movie</a>

        <?php endforeach; ?>
    
    </body>
</html>