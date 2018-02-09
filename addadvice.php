<?php 

$email = $_COOKIE['email'];
$id = $_COOKIE['id'];

require 'MyDb.php';
$db = new MyDb();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Advice</title>
</head>
<body>
	<form method="post" action="addadvice1.php">
		<input type="text" name="text" placeholder="advice" required>
		<button type="submit">Add</button>
	</form>

	<a href="showadvice.php"><button>Show Advices</button></a>

</body>
</html>