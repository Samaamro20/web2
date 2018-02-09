<?php 
require "MyDb.php";
$db = new MyDb();

$text = $_POST['text']; 
$DOM=$_POST['DOM'];
$sender_id = $_POST['sender_id']; 
$reciver_id=$_POST['reciver_id'];

$result = $db->addmessage($text,$DOM,$sender_id,$reciver_id);
 echo $result;
 ?>