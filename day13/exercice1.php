<?php

require_once('var_show.php');

$cars_i_want = array(
    'Porshe',
    'Ferrari',
    'Aston Martin',
    'Lamborghini',
    'Bugatti'
);

$cars_i_have = array(
    'Ferrari',
    'Lamborghini'
);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <?php

        $cars_i_dont_have = array_diff($cars_i_want, $cars_i_have);
        var_show($cars_i_dont_have);
        shuffle($cars_i_dont_have);
        var_show($cars_i_dont_have);
        $random_car_i_will_buy = array_shift($cars_i_dont_have);
        var_show($random_car_i_will_buy);



        ?>
    
    </body>
</html>
