<?php

if(!empty($_POST))
{
    var_dump($_POST);
}
/**
*displays radiobuttons for the supplied values
*
*the radio button with the value equal to $selected_values will be checked
*@param string $input_name - name of all radio button
*@param array $values - arrays of values
*@param integer|string $selected_values - the value of the checked button
*@return void
*/
/*function print_radio($input_name, $values,$selected_values){
    // for each $values
    foreach ($values as $value)
    {
        //print a radio button input
         ?>
        <input type="radio"  value="<?php echo htmlspecialchars($values)?>"
        <?php
        //give it the name $input_name
        ?> name="<?php echo $input_name; ?>"
        <?php
        //make it checked if its value is selected value
        ?>
        <?php if($value ==$selected_value) : ?>
        checked
        <?php endif;?>
        >
        <?php
    }*/

    function print_radio($input_name, $values,$selected_values){
    $html='';
    // for each $values
    foreach ($values as $value)
    {
        //print a radio button input
         $one_radio_html = '<input type="radio"  value="'. htmlspecialchars($values) .'"name"' . $input_name . ($value==$selected_value ? 'checked' : '') . '>';
    }

    ?>
    <input type="radio" name="$input_name" value="$values" >
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eshop - home</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="text" value="<?php echo htmlspecialchars ('coding');?>" placeholder"write something here">
        <textarea name="textarea"><?php echo htmlspecialchars ('bootcamp');?></textarea>
        <input type="checkbox" name="checkbox" <?php if(true) echo 'checked'; ?>>
        <input type="radio" name="radiobtn"><?php echo false ? 'checked' : ''; ?>
        <input type="radio" name="radiobtn"><?php echo true ? 'checked' : ''; ?>
        <select name="select">
            <option value="1">ONE</option>
            <option value="2">TWO</option>
        </select>
        <?php print_radio($input_name, $values,$selected_values) ?>
        <input type="password" name="password">
        <input type="hidden"name="hidden">
        <input type="file"name="file">
        <input type="datetime-local"name="datetime-local">
        <input type="date"name="date">
        <input type="month"name="month">
        <input type="submit" value="submit form"name="submit">
    </form>

</body>
</html> 