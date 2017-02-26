<?php

// set error displaying
ini_set('display errors', 'on');
error_reporting(E_ALL | E_STRICT);

// define where the document root is
define('DOCROOT', __DIR__);

// start the bootstrapping process
require_once(DOCROOT.'/system/project/config/boostrap.php');


// start the application


//try some code
$page_to_display = request::get('page', 'home');
var_dump($page_to_display);

if(request::isPost())
{
    $actor = request::post('actor');
    var_dump($actor);
}

//we get the name of the controller ($_GET['page'], 'home' or 'error404')
$controller_name = router::getControllerNAme();

//we run the right controller based on it's name
router::runController($controller_name);
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
        <form acttion="" method="post">
            <input type="text" name="actor[name]" value="<?php echo htmlspecialchars(request::post('actor')['name']);?>"> <!--this allow you to keep the data prefilled with what was fill in in case the page rellowed because of an error-->
            <textarea name="actor[biography]"><?php echo htmlspecialchars(request::post('actor')['biography']);?></textarea>
            <input type="submit" name="submit" value="submit">
        </form>
    
    </body>
</html>

