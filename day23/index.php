<?php
$files=scandir('classes');
foreach($files as $file)
{
    //if the file is a reference to this folder or the one above, continue
    if($file == '.' || $file == '..') continue;

    //if the file is a php file(has .php extenision)
    if(pathinfo($file,PATHINFO_EXTENSION)=='php')
    {
        // require the file
        require_once('classes/' . $file);
    }
}
$mickey=new giraffe('Mickey');

$berta=new giraffe('Berta', 'pond');
$matt=new giraffe('Matt', 'zoo');
$matt->go_to_forest();
$todd=new giraffe('Todd');
$todd->goToLocation('zoo');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nature report</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Nature report</h1>

        <p>Currently there are <?php echo giraffe::getNumberOfGiraffes(); ?> giraffes in the world.</p>
       
        <p><?php echo giraffe::getNumberOfGiraffesAtLocation('forest'); ?> of them are in the forest, <?php echo giraffe::getNumberOfGiraffesAtLocation('pond'); ?> are at the pond and <?php echo giraffe::getNumberOfGiraffesAtLocation('zoo'); ?> are at the zoo.</p>

        <p>There is a giraffe called <?php echo $mickey->name;?>.</p>
        <p>It <?php echo $mickey->is_hungry ? 'is ' : 'is not '; ?> hungry and it <?php echo $mickey->is_thirsty ? 'is ' : 'is not '; ?> thirsty.</p>
        <p>It is <?php echo $mickey->getLocationName();?>.</p>
        <p>The giraffes are</p>
        <ul>
            <?php foreach(giraffe::$list_of_giraffes as $giraffe) :?>
            <li><?php echo $giraffe . ' is ' . $giraffe->getLocationName(); ?></li>
            
            <?php endforeach;?>
        </ul>
    </body>
</html>