<?= 


// require 'function.php';
$my_greeting = "Hello, world!";

$first_name = "Mohamed";
$surname = "Toure";
$year_of_birth = "1990";
$height = "1m70";
define('MY_OS', 'Mac OS');

$value = 1;
$value = $value + 10;
$value += 10;

$value += 10;
$value -+5;
$value /=4;

$final_string = 'Hello, ' . 'world!';
$string ='H'; //H
$string .= 'e';//HE
$string .= 'llo'; //Hello

$celsius =-6;
//$fahrenheit = (9/5)*$celsius+32;

function celcius_to_fahrenheit($celcius){
    $fahrenheit = (9/5)*$celsius+32;
    return $fahrenheit;
}


// ++ or -- means adding 1 in the values

//var_dump();
//die('There is an error'); run when an error occur
//exit(); run 
//function dd($variable) =dump and die


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP playground</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        First name:  <?php echo $first_name ?> <br/>
        Surname: <?php echo $surname ?> <br/> 
        YOB: <?php echo $year_of_birth ?> <br/> 
        Height: <?php echo $height ?> <br/>
        My OS is: <?php echo MY_OS?>
        Today is <?php echo celcius_to_fahrenheit(-6); ?>&deg F 
       
       <?php function print_is_even($number){
    $result =$number % 2 == 0 ? 'even' : 'odd';
    echo $result;
}
$number_to_test = 47;
?>

The number <?php echo $number_to_test; ?> is <?php echo print_is_even($number_to_test); ?>




    </body>
</html>