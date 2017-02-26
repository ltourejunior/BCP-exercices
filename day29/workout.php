<?php
$x='x';

if ($x==123)
{
    echo 'true';
}


    echo htmlspecialchars($_POST('foo'));

if(isset($_POST['foo'])) //check if a variable is submited
?>
<form method="post">
    <input type="text" name="foo" value="()">
    <input type="submit" name="submit" value="submit">
</form>


