<?php 
require 'MyDb.php';
$db = new MyDb();
// $id = $_COOKIE['id'];
$id = $_POST['id'];
$result=$db->showadvice($id);
echo $result;
 ?>