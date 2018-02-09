<?php 
require 'MyDb.php';
$db = new MyDb();
$error='';
	$error="detrmine the type";

 	 $email=$_POST['email'];
     $password =$_POST['password'];
     	if($db->login($email,$password)){
 			setcookie("email",$email,time()+ 10000);
 			$rows = $db->getUser($email,$password);
 				foreach ($rows as $row) {
 				setcookie("id",$row['id'],time()+ 10000);

 				header("location:index.php?id=" . $row['id']  );

 				}
 				 
 				 			}
 		else{
 			header("location:login.php?error=1");
 		}
 	 
     	
 ?>