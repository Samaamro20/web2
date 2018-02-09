<?php 
require "MyDb.php";
$db = new MyDb();

//$id = $_COOKIE['id'];
$id = $_POST['id'];
$name = $_POST['name']; 
$key=$_POST['key'];

$result = $db->addclass($name,$key,$id);
echo $result ;
// if ($result) {
// 	header("location:addclass.php" );
// }

?>