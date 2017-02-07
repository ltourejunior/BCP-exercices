<?php
define('CURRENCY', 'EUR');

function  print_price($price){
    echo $price . ' €';
}

switch (CURRENCY) {
    case 'USD':
        print_price('110');
        break;

    case 'CZK':
        print_price('270');
        break;  
    
    default:
        print_price('100');
        break;
}

