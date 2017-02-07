<?php 

$height = 170;
if($height > 180) 
{
    echo 'tall';
} 
elseif($height>160) {
    echo 'average';
}
else {
    echo 'small';
}


// if(true)
// {
//     //this will run
// }

// if(false)
// {
//     //this will not run
// }

// if(1)
// {
//     will run
// }

// if(0)
// {
//     will not run
// }

// if(1 == 0)
// {
//     will not run because not equal
// }

// if(1 == true)
// {
//     will  run because equal
// }

// if(1 === true)
// {
//     will not run because not exaclty the same
// }

// if(1 === 1)
// {
//     will run because exact match
// }

$name_of_OS= 'OS X';
switch($name_of_OS) {
    case 'Windows':
    echo "Edge"; // code to run when value == Windows
    break; // mandatory
    case 'OS X':
    echo 'Safari';// code to run when value == value_2
    break;
    case 'Linux':
    echo 'Firefox';
    break;
    default:
    echo 'Just use Chrome'// code to run when none of the previous conditions are true
    break;
}

?>