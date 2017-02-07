<?php
require_once 'vehicle.class.php';
require_once 'car.class.php';
require_once 'horse.class.php';
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
            $vehicle = new vehicle();
            var_dump($vehicle);


            $car=new car();
            $car->change_color('red');
            var_dump($car);

            $horse=new horse();
            var_dump($horse);
        ?>
        
    </body>
</html>