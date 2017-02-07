
<?php

$iterator = 0;

do{
    $iterator++;

    echo $iterator . '<br>';
}

while($iterator <10);
 //same as while but the code work before the condition is asked

 for($i = 0; $i < 0; $i++){
     for($j=0; $j<10;$j++){
         echo ($i*10)+$j . '<br>';
     }  
 };

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
        <?php for($i = 10; $i > 0; $i--) : ?>
         <?php if($i==7 ) continue; ?> 
        <?php if($i<3 ) break; ?>
         <li>List item number <?php echo $i; ?> </li>
        <?php endfor; ?>
    </ul>
    


    </body>
</html>

