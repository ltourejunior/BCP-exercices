<?php
session_start();
require_once './shared/database.php';

$db = new Database();
if ($_POST) {
  $orderid= $db->insertorder($_SESSION['userid']);
  $db->insertproducttoorder($_POST['id'],$orderid);
  header('Location: index.php');
}