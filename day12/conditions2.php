<?php 

phpinfo();die();

$age=26;
$gender='male';
$employed=false;

if($age>35){
    echo 'yes';
}
else {
    echo 'no';
}

if($employed){
    echo 'yes';
}
else {
    echo 'no';
}

if($age<18){
    echo 'yes';
}
else {
    echo 'no';
}

if($age<12 && $gender=='female'){
    echo'yes';
}
else {
    echo 'no';
}

if($age>=18 && !$employed){
    echo 'yes';
}
else {
    echo 'no';
}
if ($age>=60 && $employed && $gender=='female'){
    echo 'yes';
}

if (($gender=='male' && $age > 20 )||(!$employed && $gender='female') )
?>

