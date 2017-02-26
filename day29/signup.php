<?php
require_once './shared/database.php';

$db= new Database();


if ($_POST){
   $userid=$db->insertuser($_POST['name'], $_POST['email'], $_POST['password']);
   session_start();
   $_SESSION['userid'] = $userid;
   header('Location: index.php');
   
}

?>
<form action="" method="post">
    <label for="name">Name: <input type="text" name="name"></label><br>
    <label for="email">Email: <input type="email" name="email"></label><br>
    <label for="password">Password: <input type="password" name="password"></label><br>
    <input type="submit" name="submit" value="submit">
</form>