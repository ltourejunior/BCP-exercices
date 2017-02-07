
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

function do_something_risky() {
  // do the risky stuff

  // return new messages
  return array(
    'error' => array(
      'I knew this would happen!',
      'This always happens.'
    ),
    'warning' => array(
      'You should fix this before proceeding'
    ),
    'success' => array()
  );
}

// let's try it
$new_messages = do_something_risky();

//merge two multidimensional arrays into one 
// $merged_messages = array_merge($messages,$new_messages); 

$merged_messages['error'] = array_merge($messages['error'], $new_messages['error']); 
$merged_messages['warning'] = array_merge($messages['warning'], $new_messages['warning']); 
$merged_messages['success'] = array_merge($messages['success'], $new_messages['success']);  
                

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
            <?php foreach($merged_messages as $type => $messages_type) : ?>
                <?php foreach($messages_type as $message_text) : ?>

                    <div class="message <?php echo $type; ?>"> <?php echo $message_text; ?> </div>

                <?php endforeach; ?>
            <?php endforeach; ?>

        
    
    </body>
</html>
