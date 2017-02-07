<?php

require_once('var_show.php');

$variable = 'Mohamed';

$fruit = array(
    0 => 'Apple',
    1 => 'Pear',
    2 => 'Orange'
);

$fruit_colors = array(
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arrays</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <?php var_show($fruit); 


       $some_fruit = array_slice($fruit, 1, 2); //if you stop at one, it will show the array till the end and not stop at some point
        var_show($some_fruit);
        
        $first_item = array_shift($fruit);
        var_show($first_item);
        var_show($fruit)

        // array_unshift ($fruit, 'mango'); // put the object at the beginning of the arrays
        // var_show($fruit);
        ?>


<!--
    
        <?php val_show($variable); ?>
        <?php var_show($variable); ?>
        <?php var_show($fruit_colors); ?>
        <?php $array=[]; 
        var_show($array);
        $array[]='first'; 
        var_show($array);
        $array[]='second'; 
        var_show($array);

        $array['my key'] = 'my value';
        var_show($array);

          $array[]='next'; 
        var_show($array);

         $array[123]='a value'; 
        var_show($array);

        var_show($array[123]);
        $array[]=$array;
        var_show($array);

        ?>-->

    </body>
</html>
