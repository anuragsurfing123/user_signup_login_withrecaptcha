<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
	

	<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<style>



		</style>
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
<div class="container border border-info p-5">
<h1 class=""><center>User Dashboard</center></h1>
<?php  if (isset($_SESSION['user'])): ?>

<table class="table border">
  <thead>
    
  </thead>
  <tbody>

  <?php if(($_SESSION['user']['profilepic'])!=NULL){ ?>
  <tr>
      
      <td><span class="badge badge-success">ProfilePic</span></td>
      <td><img src="<?php echo $_SESSION['user']['profilepic'] ?>" width="100" height="100"></td>
      
    </tr>
  <?php } ?>

    <tr>
      
      <td><span class="badge badge-success">UserName</span></td>
      <td><strong><?php echo $_SESSION['user']['username']; ?></strong><small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> </small></td>
      
    </tr>
    <tr>
      
      <td><span class="badge badge-success">First Name:</span><strong></td>
      <td><strong><?php echo $_SESSION['user']['firstname']; ?></strong></td>
      
    </tr>
    <tr>
      
      <td><span class="badge badge-success">Last Name:</span><strong></td>
      <td><strong><?php echo $_SESSION['user']['lastname']; ?></strong></td>
      
	</tr>
	
	<tr>
      
      <td><span class="badge badge-success">DOB:</span><strong></td>
      <td><strong><?php echo $_SESSION['user']['dob']; ?></strong></td>
      
	</tr>
	
	<tr>
      
      <td><span class="badge badge-success">City:</span><strong></td>
      <td><strong><?php echo $_SESSION['user']['city']; ?></strong></td>
      
	</tr>
	
	<tr>
      
	<td><span class="badge badge-success">Email:</span><strong></td>
      <td><strong><?php echo $_SESSION['user']['email']; ?></strong></td>
      
    </tr>
  </tbody>
</table>





						<?php endif ?>

</div>




</div>
</body>
</html>