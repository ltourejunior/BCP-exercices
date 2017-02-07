
<?php
$messages = array(
  'error' => array(
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ),
  'warning' => array(
    'This is your first warning',
    'This is your final warning'
  ),
  'success' => array(
    'Finally, something was successful.'
  )
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
            <?php foreach($messages as $type => $messages_type) : ?>
                <?php foreach($messages_type as $message_text) : ?>

                    <div class="message <?php echo $type; ?>"> <?php echo $message_text; ?> </div>

                <?php endforeach; ?>
            <?php endforeach; ?>

        
    
    </body>
</html>
