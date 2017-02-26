<?php
session_start();
require_once './shared/database.php';

$db = new Database();
$product = $db->getproduct($_POST['id']);

echo htmlspecialchars ($db->getuser($_SESSION['userid'])['name']);

?>

 <!DOCTYPE html>
 <html lang="en">
     <head>
         <title>Summary</title>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="css/style.css" rel="stylesheet">
     </head>
     <body>
        <h1>You want to buy <?php echo $product['name']; ?> </h1>
        <p>Price: <?php echo htmlspecialchars($product['price']); ?></p>
        <p>Size: <?php echo htmlspecialchars($product['size']); ?></p>
        <p>Color: <?php echo htmlspecialchars($product['color']); ?></p>
        <form action="checkout.php" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
        <input type="submit" value="Check out">
        </form>
     </body>
 </html>