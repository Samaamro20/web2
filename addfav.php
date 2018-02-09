<?php 
require "MyDb.php";
$db = new MyDb();

$id = $_POST['id'];
$record_id=$_POST['record_id'];

$result=$db->addfav($record_id,$id);

echo $result;
 ?>