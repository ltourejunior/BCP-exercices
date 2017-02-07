<?php

require_once 'functions.php';

$message="We are sorry. Not enough items in stock.";
$stock= amount_in_stock($_POST['product_id'], $_POST['color'], $_POST['size']);
$card=add_to_cart($_POST['product_id'], $_POST['color'], $_POST['size'], $_POST['amount']);

if ($_POST['checkout']==1 && $_POST['amount'] <= $stock) {
    $card;
    header("Location: checkout.php");
}

elseif ($_POST['amount'] <= $stock){
    $card;
}
 else{
     add_error($message);
     header("Location: home.php");
 }




