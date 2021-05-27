<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php 
// check for form submission
	if (isset($_POST['submit'])) {

		$errors = array();

		// check if the username and password has been entered
		if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ) {
			$errors[] = 'Username is Missing / Invalid';
		}

		if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ) {
			$errors[] = 'Password is Missing / Invalid';
		}

		// check if there are any errors in the form
		if (empty($errors)) {
			// save username and password into variables
			$email 		= mysqli_real_escape_string($connection, $_POST['email']);
			$password 	= mysqli_real_escape_string($connection, $_POST['password']);
			$hashed_password = sha1($password);

			// prepare database query
			$query = "SELECT * FROM user 
						WHERE email = '{$email}' 
						AND password = '{$hashed_password}' 
						LIMIT 1";

			$result_set = mysqli_query($connection, $query);

			verify_query($result_set);

			if (mysqli_num_rows($result_set) == 1) {
				// valid user found
				$user = mysqli_fetch_assoc($result_set);
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['first_name'] = $user['first_name'];
				// updating last login
				$query = "UPDATE user SET last_login = NOW() ";
				$query .= "WHERE id = {$_SESSION['user_id']} LIMIT 1";

				$result_set = mysqli_query($connection, $query);

				verify_query($result_set);

				// redirect to advertising.php
				header('Location: addPost.php');
			} else {
				// user name and password invalid
				$errors[] = 'Invalid Username / Password';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In - Rental Service</title>
	<link rel="stylesheet" href="./login.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="header">
		<div class="container">
		<div class="navbar">
            <div class="logo">
               <a href="./index.php">EVENT PLANER</a>
            </div>
            <nav>
            <ul id="MenuItems">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./products.php">Products</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="./login.php">Account</a></li>
            </ul>
            </nav>
        </div>
</div>
</div>
	<div class="login">

		<form action="login.php" method="post">
			<h2>login/<a href="./add-user.php">Register</a></h2>
			
				<?php 
					if (isset($errors) && !empty($errors)) {
						echo '<p class="error">Invalid Username / Password</p>';
					}
				?>

				<?php 
					if (isset($_GET['logout'])) {
						echo '<p class="info">You have successfully logged out from the system</p>';
					}
				?>
					<!--<label for="">Username:</label>-->
					<input type="text" name="email" id="" placeholder="Email Address">
			
					<!--<label for="">Password:</label>-->
					<input type="password" name="password" id="" placeholder="Password">
				
				<div class="row_btn">
					<button type="submit" name="submit">Log In</button>
					<a href="logout.php">Log Out</a>
				</div>
		</form>		
	</div> 

	<script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                    {
                        MenuItems.style.maxHeight = "200px"
                    }
                else
                    {
                        MenuItems.style.maxHeight = "0px";
                    }
            }
        </script>
</body>
</html>
<?php mysqli_close($connection); ?>