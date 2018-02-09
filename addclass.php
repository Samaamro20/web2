<?php 

$email = $_COOKIE['email'];
$id = $_COOKIE['id'];

require 'MyDb.php';
$db = new MyDb();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Class</title>
</head>
<body>
<form method="post" action="addclass1.php">
	Name : <input type="text" name="name" placeholder="Class Name">
	Key : <input type="text" name="key" placeholder="Class Key ">
	<input type="submit" name="submit" value="submit"> 
</form>
</body>
</html>