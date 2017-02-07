
<?php

function divide($number_1, $number_2, & $remainder){
    $remainder = $number_1%$number_2;
    return $number_1/$number_2;
}
echo $result_of_division = divide(3,2,$remainder);
echo $remainder;