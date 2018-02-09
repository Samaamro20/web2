<?php 
require "MyDb.php";
$db = new MyDb();

$class_id = $_POST['class_id'];
$student_id = $_POST['student_id']; 

$result = $db->addenroll($class_id,$student_id);
echo $result ;
 ?>