<?php 
include('functions.php') ;
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>
<body>


<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Anurag</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
	  <a class="nav-link" href="updateuser.php" style="color: green;">Update User Profile</a>
      </li>
      <li class="nav-item">
	  <a class="nav-link" href="index.php?logout='1'" style="color: red;">logout</a>
      </li>
      
    </ul>
  </div>
</nav>
</div>



	<div class="header">
		<h2>Update User Profile</h2>
	</div>
	<?php  if (isset($_SESSION['user'])) : ?>
	<form method="post" action="updateuser.php" enctype="multipart/form-data">
	<?php echo display_error(); ?>
	<div class="input-group">
			<label>Profile pic</label>
			
			<input type="file" name="upload_images" value="<?php echo $_SESSION['user']['profilepic'] ?>">
		</div>

		<div class="input-group">
			
			<input type="hidden" name="id" value="<?php echo$_SESSION['user']['id'] ?>">
		</div>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo$_SESSION['user']['username'] ?>">
		</div>
        <div class="input-group">
			<label>First Name</label>
			<input type="text" name="firstname" value="<?php echo$_SESSION['user']['firstname'] ?>">
		</div>
        <div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastname" value="<?php echo$_SESSION['user']['lastname'] ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo$_SESSION['user']['email'] ?>">
		</div>
		<!-- <div class="input-group">
			<label>Password</label>
			
			<input type="password" name="password" value="">
		</div> -->
		<div class="input-group">
			<label>DOB</label>
			<input type="date" name="dob" value="<?php echo$_SESSION['user']['dob'] ?>">
		</div>
        <div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo$_SESSION['user']['address'] ?>">
		</div>
        <div class="input-group">
			<label>City   </label>
			<input type="text" name="city"value="<?php echo$_SESSION['user']['city'] ?>">
		</div>
        <div class="input-group">
			<label>Country</label>
			<input type="text" name="country" value="<?php echo$_SESSION['user']['country'] ?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn btn-success" name="updateuser_btn">Update User Profile</button>
		</div>
		
    </form>
    
    <?php endif ?>
</body>
</html>