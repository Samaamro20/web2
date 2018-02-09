
<?php 
require "MyDb.php";
$db = new MyDb();

$questions = $_POST['questions'];
$answers = $_POST['answers'];
$teacher_id=$_POST['teacher_id'];

$result=$db->addexams($questions,$answers,$teacher_id);
echo $result;

 ?>