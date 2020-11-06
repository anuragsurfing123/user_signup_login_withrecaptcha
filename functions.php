<?php

session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'thefus');

	// variable declaration
	$username = "";
	$email    = "";
    $errors   = array(); 
    

    	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_POST['updateuser_btn'])) {
		updateuser();
	}


	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../login.php");
    }
    
    function register(){
        global $db, $errors;

		// receive all input values from the form
        $username    =  e($_POST['username']);
        $firstname    =  e($_POST['firstname']);
        $lastname    =  e($_POST['lastname']);
		$email       =  e($_POST['email']);
        $password  =  e($_POST['password']);
		$dob= e($_POST['dob']);
		$address= e($_POST['address']);
        $city=e($_POST['city']);
		$country=e($_POST['country']);



		
		if (isset($_POST['g-recaptcha-response'])) {
		
			require('component/recaptcha/src/autoload.php');		
			
			$recaptcha = new \ReCaptcha\ReCaptcha('6Ld6Od8ZAAAAAOu1dKRInJFn9LfopEhLJK7eU8m3');
	
			$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
	
			  if (!$resp->isSuccess()) {
				 
					array_push($errors, "Captcha Validation Required!");
									
			  }	
		}

		




		if(!empty($email)){
			$sql = "SELECT email FROM users";
	$result = $db->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			if($row['email']==$email){
				array_push($errors,"email already exists");
			}
		  
		}
	  } else {
		echo "0 results";
	  }
	  
		}


		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($firstname)) { 
			array_push($errors, "Firstname is required"); 
		}
		
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password)) { 
			array_push($errors, "Password is required"); 
		}
		if (empty($dob)) {
			array_push($errors, "dob is required");
		}
		if (empty($address)) {
			array_push($errors, "address is required");
		}
		if (empty($city)) {
			array_push($errors, "city is required");
		}
		if (empty($country)) {
			array_push($errors, "country is required");
		}

		
		if (count($errors) == 0) {

			$pwd = md5($password);

		$query = "INSERT INTO users (username,firstname,lastname, email,password,dob,address,city,country, user_type ) 
						  VALUES('$username','$firstname','$lastname', '$email', '$pwd', '$dob','$address', '$city', '$country', 'user')";
				mysqli_query($db, $query);

				
				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				header('location: index.php');

		}
		
    }

    // return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
    }
    
    function login(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);


		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}


		if (count($errors) == 0) {


		$pwd = md5($password);

		$query = "SELECT * FROM users WHERE (username='$username' OR email='$username') AND password='$pwd' LIMIT 1";
		$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
		if ($logged_in_user['user_type'] == 'user') {

			$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: index.php');



		}
	}
		else{
			array_push($errors, "Wrong username/password combination");
		}
	}
        
	}
	



	function updateuser(){
		global $db, $errors;



		function compressImage($source, $destination, $quality) { 
			// Get image info 
			$imgInfo = getimagesize($source); 
			$mime = $imgInfo['mime']; 
			 
			// Create a new image from file 
			switch($mime){ 
				case 'image/jpeg': 
					$image = imagecreatefromjpeg($source); 
					break; 
				case 'image/png': 
					$image = imagecreatefrompng($source); 
					break; 
				case 'image/gif': 
					$image = imagecreatefromgif($source); 
					break; 
				default: 
					$image = imagecreatefromjpeg($source); 
			} 
		}



		if($_FILES['upload_images']['name']){
			move_uploaded_file($_FILES['upload_images']['tmp_name'], "image/".$_FILES['upload_images']['name']);
			$profilepic="image/".$_FILES['upload_images']['name'];


			$fileType = pathinfo($profilepic, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Image temp source 
            $imageTemp = $_FILES["upload_images"]["tmp_name"]; 
             
            // Compress size and upload image 
			$compressedImage = "image/".$_FILES['upload_images']['name']; 
			
		}else{ 
			array_push($errors, "Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.");
            
        } 



			}






$username    =  e($_POST['username']);
        $firstname    =  e($_POST['firstname']);
        $lastname    =  e($_POST['lastname']);
		$email       =  e($_POST['email']);
        
		$dob= e($_POST['dob']);
		$address= e($_POST['address']);
        $city=e($_POST['city']);
		$country=e($_POST['country']);
		$id=e($_POST['id']);


		if (count($errors) == 0) {
		
		


		$query = "UPDATE users SET profilepic='$compressedImage', username='$username',firstname='$firstname',lastname='$lastname', email='$email', dob='$dob',address='$address', city='$city', country='$country' WHERE id='$id' ";
	   $result= mysqli_query($db, $query);
	   if($result){
		$_SESSION['success']  = "Profile updated successfully!! Login again";
		
		echo '<script type="text/javascript">alert("data updated successfully and login again");</script>'; 
		header('location: index.php?logout="1"');
		//?logout="1"
		
	   }
				

		}

	}


    function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
    }
    
    // escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}



	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}


?>