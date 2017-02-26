<?php
session_start();
require_once './shared/database.php';

$db= new Database();
$products = $db->getproducts();

echo htmlspecialchars ($db->getuser($_SESSION['userid'])['name']);
?>
<h1>MLT shop, buy here :)</h1>
<?php
foreach ($products as $product){// every single data of the column wil be available as product variable
    echo 'Name: ' . htmlspecialchars($product['name']) . '<br>';
    echo 'Price: ' . htmlspecialchars($product['price']) . '<br>';
    echo 'Size: ' . htmlspecialchars($product['size']) . '<br>';
    echo 'Color: ' . htmlspecialchars($product['color']) . '<br>';
    echo '<form action="summary.php" method="post">'
        . '<input type="hidden" name="id" value="'. htmlspecialchars($product['id']) . '">'
        . '<input type="submit" value="Buy this">'
        . '</form><hr>';
}
?>