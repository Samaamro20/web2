<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Register Page  Design.... - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="login.css">

		<title>Admin</title>
	</head>
	<body>
		<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">register</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form action="register1.php" method="post" id="register-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="name">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="password">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="info" name="info" placeholder="Info">
					</div>
					
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="email">
					</div>

					<div class="input-container">
	                  <select name="type" class="form-control select-menu" id="sel1">
				      <option  selected disabled hidden >type</option>s
					    <option value="0">Teacher</option>
					    <option value="1">Student</option>
					  </select>
	               </div>	

	               <div class="input-container">
	                  <select name="level" class="form-control select-menu" id="sel2">
				      <option  selected disabled hidden >Level</option>
					    <option value="0">Normal</option>
					    <option value="1">Typical</option>

					  </select>
	               </div>

				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="login.php">login here</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>

</body>
</html>

