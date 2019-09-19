<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'oscsdb');

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

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../login.php");
	}

	// REGISTER USER
	function register(){
		global $db, $errors;

		// receive all input values from the form
		$username    =  e($_POST['username']);
		$stdno       =  e($_POST['stdno']);
        $course      =  e($_POST['course']);
        $email       =  e($_POST['email']);
        $password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if (isset($_POST['UserType'])) {
				$user_type = e($_POST['UserType']);
				$query = "INSERT INTO users (UserName,studentNo,course,Email, UserType, Passsword) 
						  VALUES('$username','$stdno' ,'$course','$email', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('Location: Dashboard.php');
			}else{
				$query = "INSERT INTO users (UserName, studentNo, course ,Email, UserType, Password) 
						  VALUES('$username', '$email','$stdno' , '$course' ,'user', '$password')";
				mysqli_query($db, $query);

				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				header('Location: Dashboard.php');				
			}

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

	// LOGIN USER
	function login(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM users WHERE UserName='$username' AND Password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['UserType'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: admin/Dashboard.php');		  
				}
				elseif($logged_in_user['UserType'] == 'Librarian') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: Librarian/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'Bursa') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: Busar/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'HoD') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: HoD/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'DoS') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: DoS/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'Warden') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: Warden/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'MedicalOfficer') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: MedicalCenter/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'Lab') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: Lab/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'SportScience') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: SportScience/Dashboard.php');						
				}
				else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: student/Dashboard.php');
				}
			}else {
				array_push($errors, "Wrong username/password combination");
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

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['UserType'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}
	function isLibrarian()
	{
		if(isset($_SESSION['user']) && $_SESSION['user']['UserType'] == 'Librarian') {
			return true;
		}else{
			return false;
		}
	}
	function isbusar()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'Bursa') {
			return true;
		}else{
			return false;
		}
	}
	function isHoD()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'HoD'){
			return true;
		}else{
			return false;
		}
	}
	function isDOS()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'DoS'){
			return true;
		}else{
			return false;
		}
	}
	function iswarden()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'Warden'){
			return true;
		}else{
			return false;
		}
	}
	function issportscience()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'SportScience'){
			return true;
		}else{
			return false;
		}
	}
	function ismedicalofficer()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'MedicalOfficer'){
			return true;
		}else{
			return false;
		}
	}
	function islab()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'Lab'){
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