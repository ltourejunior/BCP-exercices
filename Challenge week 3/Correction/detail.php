<?php 
require_once 'lib/data-functions.php';

$data=get_data($id);

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
        <ul>
            <?php foreach ($data as $id =>$informations) : ?>
              <li><?php echo $informations ?></li>
            <?php endforeach; ?>
                </ul>

    
    </body>
</html>


