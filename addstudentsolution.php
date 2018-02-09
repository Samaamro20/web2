<?php 
require "MyDb.php";
$db = new MyDb();

$answers = $_POST['answers'];
$exam_id=$_POST['exam_id'];
$student_id=$_POST['student_id'];

$result=$db->addstudentsolution($answers,$exam_id,$student_id);
echo $result;
 ?>