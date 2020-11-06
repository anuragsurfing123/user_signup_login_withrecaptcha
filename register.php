<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">
	<?php echo display_error(); ?>
		

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
        <div class="input-group">
			<label>First Name</label>
			<input type="text" name="firstname" >
		</div>
        <div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastname" >
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password"  >
		</div>
		<div class="input-group">
			<label>DOB</label>
			<input type="date" name="dob" >
		</div>
        <div class="input-group">
			<label>Address</label>
			<input type="text" name="address" >
		</div>
        <div class="input-group">
			<label>City</label>
			<input type="text" name="city" >
		</div>
        <div class="input-group">
			<label>Country</label>
			<input type="text" name="country" >
		</div>
		<div class="input-group">
		<div class="g-recaptcha" data-sitekey="<?php echo '6Ld6Od8ZAAAAAPf4ybSfJwIqdGX7lhjGsEaGiUqv'; ?>"></div>
		
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	<?
	
	
	?>
</body>
</html>