<?php 
require "MyDb.php";
$db = new MyDb();

//$email = $_COOKIE['email'];
// $id = $_COOKIE['id'];
$id = $_POST['id'];
$text = $_POST['text']; 

$result = $db->addadvice($text,$id);
echo $result ;
 ?>