<?php
for($i = 2; $i < 10 ;$i++){
    echo $i;
};

for($i = 0; $i < 10 ;$i++){
    echo $i;
};

$a = array();
for ($i = 0; $i < 10; $i++){
    $a[$i]='value';
}

var_dump($a);

echo '<br>';
 echo '<br>';
echo '<hr>';

$a=array(
    'name'=>'Jack',
    'lastname'=>'daniels',
    'age'=>'8',
    'color'=>'blue',
);

foreach ($a as $key => $value){ /* if don't want use the key delete "$key =>" and it will show only the values */ 
    echo $value;
    echo ': ';
    echo $value;
    echo '<br>';
    echo '<hr>';
// the same as writting echo "$key: $value<br><hr>";
// also the same as writting echo $key . ': '   . $value . '<br><hr>';
};
echo '<br>';
    echo '<hr>';

$order = array (
    array(
        'item'=> 'macbook air',
        'price' => 23876767,
    ),
    array(
        'item'=> 'apple tv',
        'price' => 2387676,
    ),
    array(
        'item'=> 'router',
        'price' => 2387,
    ),
    array(
        'item'=> 'thing',
        'price' => 238,
    ),
     array(
        'item'=> 'green thing',
        'price' => 23,
    ),
);

foreach ($order as $prod){
    echo "buying " . $prod['item'] . " for " . $prod['price'] . "<br>";
};
