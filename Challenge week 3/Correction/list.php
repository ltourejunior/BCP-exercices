<?php 
require_once 'lib/data-functions.php';
$index=get_index();
var_dump($index);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>List of some of the most succesful people arround the world</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <ul>
            <?php foreach ($index as $id =>$name) : ?>
            <li value=$id> <a href= detail.php?id=<?php echo $id; ?> > <?php echo $name; ?> <a></li>
        
            <?php endforeach; ?>
        </ul>
                
    </body>
</html>