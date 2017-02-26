<?php

$course_name='Coding Bootcamp';
$my_name='Mohamed';
$result=11-3;
$instructors=[
    'Jan', 
    'Daniel',
    'Michal',
    'Jakub'
    ];

class bootcamp
{
    public $instructors= array(
    'Jan', 
    'Daniel',
    'Michal',
    'Jakub'
    );
}

function great_me()
{
    echo 'Good morning Prague! <br/>';
}

great_me();

$my_greeting= 'Good morning ' . $my_name . '<br/>';

echo $my_greeting;

sort($instructors);

foreach ($instructors as $name){
    echo great_someone($name);
}

function great_someone($name)
{
    return 'Good morning ' . $name. '<br/>';
}




