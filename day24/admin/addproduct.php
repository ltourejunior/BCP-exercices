<?php
require_once '../shared/database.php';
if ($_POST){
    $db = new Database();
    $db->insertproduct($_POST['name'], $_POST['price'], $_POST['size'], $_POST['color']); // we execute the stmt (statement) that we preapared, and create an array to replace the ? by the value from the form 
    header('Location: products.php');
}
?>
<h2>Add product</h2>
<form action="" method="post">
Name:
<input type="text" name="name"><br><br>
Price:
<input type="text" name="price"><br><br>
Size:
<input type="text" name="size"><br><br>
Color:
<input type="text" name="color"><br><br>
<input type="submit">
</form>
<a href="products.php">Click here to see your basket</a>
