<?php
session_start();

if (isset($_SESSION['id'])) {
 		header('location:page-home.php');
 	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JuanConnect: Barangay Dumlog</title>
	<link rel="shortcut icon" href="Picture/logo_dumlog.png">
	<link rel="stylesheet" type="text/css" href="css/style-login-page.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
	<!-- Navigation Bar -->
	<div class="nav">
		<a href="page-login.php">home</a>
		<a href="page-about.php">about</a>
	</div>
	
	<!-- Login Section -->
	 <div class="container">
		<div class = "right">
			<section class="banner">Login</section> 
			</br> </br>
			<center>
				<img src="Picture/logo_dumlog.png" height="100" width="100" >
			</center>

			<form method="POST">
				<input type="text" name="username" required autofocus placeholder="Enter Username">
				<input type="password" name="password" required autofocus placeholder="Enter Password">
				
				<input type="Submit" name="submit" value="Sign In">
			</form>
		</div>
	 </div>
	
	<?php
	include('db.php');

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$qry = mysqli_query($db, "SELECT * FROM Accounts WHERE Username ='$username'");
		$count = mysqli_num_rows($qry);

		if ($count > 0) {
			$accnt = mysqli_fetch_array($qry);
			$pass=$accnt['Password'];

			
			$_SESSION['id'] = $accnt['ID'];


			if($pass==$password && $username==$username){
					
			$pos = $accnt['position_id'];
					$position=$accnt['Position'];
					$committee=$accnt['Committee'];
					$fullname = $accnt['Fullname'];
					$_SESSION['LOGIN_STATUS'] = true;
					$_SESSION['position'] = $position;
					$_SESSION['USER'] = $username;
					$_SESSION['committee'] = $committee;
					$_SESSION['password'] = $password;
					$_SESSION['emailaddress'] = $count['Emailaddress'];
					$_SESSION['device_Id'] = $count['Position'];
					$_SESSION['positionID'] = $pos;
					$_SESSION['fullname'] = $fullname;
					$_SESSION['position_id'] = $accnt['position_id'];
					echo "<script>alert('Welcome.');</script>";
					echo '<script>window.location = "page-home.php";</script>';
			}
			else {
			echo "<script>alert('Incorrect Password.');</script>";
			}
		}
		else {
		echo "<script>alert('Invalid username.');</script>";
		}
	} 
	?>

</body>
</html>


