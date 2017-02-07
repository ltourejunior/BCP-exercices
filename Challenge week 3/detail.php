<?php 
require_once 'lib/data-functions.php';

$data=get_data($_GET['id']);
var_dump($data);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Detail</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1><?php echo $data['name']?></h1>
    <div class="born">Born:<?php echo $data['DOB']?> </div>
    <div class="from"><?php echo $data['country']?></div>
    <div class="theme"><?php echo $data['professionarea']?></div>
    <div class="biography"><?php echo $data['biography']?></div>
        <ul>
            <?php foreach ($data as $id =>$informations) : ?>
              <li><?php echo $informations ?></li>
            <?php endforeach; ?>
                </ul>

    
    </body>
</html>


