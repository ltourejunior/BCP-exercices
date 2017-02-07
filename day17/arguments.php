
<?php

function validate_value($value, $messages){
    if(!$value{
        $messages[] = 'The value is invalid';
    }
    
}
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
        <?php $messages = array(); ?>
        <?php validate_value(0, $messages); ?>
        <?php var_dump($messages as $message) / ?>
        <?php foreach ($messages as $message) : ?>
            <div class="message error">
                <?php echo $message; ?>
            </div>

    
    </body>
</html>