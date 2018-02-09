<!-- Not used -->

<?php 
 $id = $_COOKIE['id'];
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
<form action="upload.php?id=". <?php $id ?> method="post" enctype="multipart/form-data">

<tr><td><b>MP3 Info:</b></td></tr>
<tr><td>Sound Name:</td><td>
<input type="text" name="name"></td></tr>
<tr><td>Select a File to Upload:</td>
<td><input type="file" name="sound">
<input type="Submit" value="Upload File"></td></tr>
</form>
</table>
</body>
</html>