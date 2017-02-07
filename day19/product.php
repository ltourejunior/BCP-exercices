<?php

if ($_POST){
    $card= array(
       $product_id=> $_POST['product_id'],
        $color=> $_POST['color'],
        $size=> $_POST['size'],
        $checkbox=> $_POST['checkbox'],
        $amount => $_POST['amount'],
    );
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T-shirt</title>
</head>
<body>
    
<form action="card.php" method="post">
<input type="hidden" name="product_id" value="321">
<input type="radio" name="color" value="black" id="blackcolor"><label for="blackcolor">Black</label>
<input type="radio" name="color" value="white" id="whitecolor"><label for="blackcolor">White</label>
Size: <select name="size">
        <option>XS</option>
        <option>S</option>
        <option>L</option>
        <option>XL</option>
        <option>XXL</option>
     </select>
Amount: <input type="text" name="amount">
<input type="hidden" name="checkout" value="0">
Checkout: <input type="checkbox" name="checkout" value="1">
<input type="submit" value="submit">
</form>

</body>
</html>

