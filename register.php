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

<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="partials/_handleRegister.php" method="post" id="myform">
				<div class="form-left">
					<h2>General Infomation</h2>
					
					<!-- <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div> -->
					<!-- / -->
					<!-- <div class="form-row">
						<select name="position">
						    <option value="position">Name</option>
						    <option value="director">Director</option>
						    <option value="manager">Manager</option>
						    <option value="employee">Employee</option>
							<input type="text" class="input" id="email" required autocomplete="off">
                            <label for="email">Name</label>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div> -->
					<div class="form-row">
						<input type="text" name="name" class="company" id="name" placeholder="Name" required>
					</div>
					<div class="form-row">
						<input type="email" name="email" class="company" id="email" placeholder="Email" required>
					</div>
					<div class="form-row">
						<input type="password" name="pass" class="company" id="pass" placeholder="Set Password" required>
					</div>
					<div class="form-row">
						<input type="password" name="cpass" class="company" id="cpass" placeholder="Confirm Password" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="date" name="dob" class="company" id="dob" placeholder="Date of Birth" required>
						</div>
						<!-- <div class="form-row form-row-4">
							<select name="employees">
							    <option value="employees">Employees</option>
							    <option value="trainee">Trainee</option>
							    <option value="colleague">Colleague</option>
							    <option value="associate">Associate</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div> -->
					</div>
				</div>
				<div class="form-right">
					<h2>Additional Information</h2>
					<div class="form-row">
						<input type="text" name="class" class="street" id="class" placeholder="Your class" >
					</div>
					
					<!-- <div class="form-row">
						<input type="text" name="additional" class="additional" id="additional" placeholder="Additional Information" required>
					</div> -->
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="number" name="pin" class="zip" id="pin" placeholder="Pin Code" >
						</div>
						<div class="form-row form-row-2">
							<select name="place">
							    <option value="">Place</option>
							    <option value="city">City</option>
							    <option value="village">Vill</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="district" id="district" class="input-text"  pattern="{0,9}" placeholder="District Name">
					</div>
					<div class="form-row">
						<select name="country">
						    <option value="">Country</option>
						    <option value="India">India</option>
						    <!-- <option value="Malaysia">Bangladesh</option> -->
						    
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<!-- <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="code" class="code" id="code" placeholder="91+" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
						</div>
					</div> -->
					
					<div class="form-row">
						<input type="number" name="phone" id="phone" class="" placeholder="Phone Number">
					</div>
					<!-- <div class="form-row">
						<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
					</div> -->
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox" required>
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register">
					</div>
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>