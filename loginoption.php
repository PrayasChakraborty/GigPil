<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/register.css"/>
</head>

<?php include "partials/header.php";
?>

<body class="form-v10 fullscreen">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="partials/_handleRegister.php" method="post" id="myform">
				<div class="form-left pb-4">
					<h2>Login As Student</h2>
					<div class="container text-center">
					<button type="button" class="btn btn-primary btn-lg justify-content-center row "><a class="nav-link" href="/gigpil/login.php">Login</a></button>
					</div>
				</div>
				<div class="form-right pb-4">
					<h2>Login As Admin</h2>
					<div class="container text-center">
					<button type="button" class="btn btn-secondary btn-lg justify-content-center row "><a class="nav-link" href="/gigpil/adminlogin.php">Login</a></button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>