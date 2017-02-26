<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?>  | <?php echo config::get('site_title', null);?> </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php echo $top_navigation;?>
        
        <?php echo $page_layout; ?>

        <?php echo $footer; ?>

    </body>
</html>