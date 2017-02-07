<?php 
 
/** 
 * displays radiobuttons for the supplied values 
 * 
 * the radiobutton with the value equal to $selected_value will be checked 
 * @param string $input_name - name of all the radiobuttons 
 * @param array $values - array of values 
 * @param integer|string $selected_value - the value of the checked radiobutton 
 * @return void 
 */ 
function print_radio($input_name, $values, $selected_value) 
{ 
    // for each $values 
    foreach($values as $value) 
    { 
        // print a radiobutton input 
        ?>  
        <input type="radio" value="<?php echo htmlspecialchars($value); ?>" 
        <?php 
        // give it the name $input_name 
        ?> 
        name="<?php echo $input_name; ?>" 
        <?php 
        // make it checked if it's value is $selected_value 
        ?> 
        <?php if($value == $selected_value) : ?> 
        checked 
        <?php endif; ?> 
        > 
        <?php 
    } 
} 
 
function print_radio2($input_name, $values, $selected_value) 
{ 
    $html = ''; 
 
    // for each $values 
    foreach($values as $value =>$label) 
    { 
       
        $one_radio_html =  
            '<input type="radio" value="'  
            . htmlspecialchars($value)  
            . '" name="'  
            . $input_name 
            . '"' 
            . ($value == $selected_value ? ' checked' : '')  
            .'id="'
            .$input_name.'_' .htmlspecialchars($value)
            .'"'
            . '>'; 
        $html .= $one_radio_html; 
    } 
 
    echo $html; 
} 
 
/* 
// calling 
print_radio('radiobtn', array( 
    1,  
    2 
), 2); 
// produces 
<input type="radio" name="radiobtn" value="1" /> 
<input type="radio" name="radiobtn" value="2" checked /> 
*/ 
 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Radio buttons</title> 
</head> 
<body> 
     
    <?php print_radio2('radiobtn', array(
        1=>'Radiobutton #1',
        2=>'Radiobutton #2',
        ), 2); ?> 
 
</body> 
</html>