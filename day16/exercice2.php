
<?php
$movies = array(
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
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
        <ol>
            <?php for($i = 0; $i < count($movies); $i++) : ?>
            <?php sort($movies)?>
            <li> <?php echo $movies[$i]; ?></li>
            <?php endfor; ?>
            
        </ol>
    
    </body>
</html>
