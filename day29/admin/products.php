<?php
require_once '../shared/database.php';

// // $stmt = $db->prepare('SELECT id,name,price,size,color FROM products');// prepare the data available in our database from the table products
// // $stmt->execute(); // make our database products extracted and available in php
$db= new Database();
$products = $db->getproducts();
foreach ($products as $product){// every single data of the column wil be available as product variable
    echo 'Name: ' . htmlspecialchars($product['name']) . '<br>';
    echo 'Price: ' . htmlspecialchars($product['price']) . '<br>';
    echo 'Size: ' . htmlspecialchars($product['size']) . '<br>';
    echo 'Color: ' . htmlspecialchars($product['color']) . '<br><hr>';
}
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
    <a href="addproduct.php">Add more products</a>
    </body>
</html>