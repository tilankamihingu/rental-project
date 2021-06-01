<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php 
	// checking if a user is logged in
	//if (!isset($_SESSION['user_id'])) {
		//header('Location: index.php');
	//}

	$errors = array();
	$first_name = '';
	$last_name = '';
	$email = '';
	$password = '';

	if (isset($_POST['submit'])) {
		
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		// checking required fields
		$req_fields = array('first_name', 'last_name', 'email', 'password');
		$errors = array_merge($errors, check_req_fields($req_fields));

		// checking max length
		$max_len_fields = array('first_name' => 50, 'last_name' =>100, 'email' => 100, 'password' => 40);
		$errors = array_merge($errors, check_max_len($max_len_fields));

		// checking email address
		if (!is_email($_POST['email'])) {
			$errors[] = 'Email address is invalid.';
		}

		// checking if email address already exists
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$query = "SELECT * FROM user WHERE email = '{$email}' LIMIT 1";

		$result_set = mysqli_query($connection, $query);

		if ($result_set) {
			if (mysqli_num_rows($result_set) == 1) {
				$errors[] = 'Email address already exists';
			}
		}

		if (empty($errors)) {
			// no errors found... adding new record
			$first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
			$last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);
			// email address is already sanitized
			$hashed_password = sha1($password);

			$query = "INSERT INTO user ( ";
			$query .= "first_name, last_name, email, password, is_deleted";
			$query .= ") VALUES (";
			$query .= "'{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}', 0";
			$query .= ")";

			$result = mysqli_query($connection, $query);

			if ($result) {
				// query successful... redirecting to users page
				header('Location: successful.php?user_added=true');
			} else {
				$errors[] = 'Failed to add the new record.';
			}


		}



	}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./register copy.css">
</head>
<body>
    <div class="navbar">
        <img src="../images/logo.png" alt="" class="logo">
        <nav>
            <ul id="menuList">
                <li><a href="../Home/home.html">Home</a></li>
                <li><a href="../Products/products.html">Products</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Login/Register</a></li>
            </ul>
            
        </nav>
        <img src="../images/menu.png" alt="" class="menu-icon" onclick="togglemenu()">
    </div>
    <div class="register-content">
        <div class="register">
            <div class="left-side">
                <h1 class="title-register">SignUP</h1>
            </div>
            <div class="right-side">
                
                <form method="post" action="register.php">
                    <h2>First Name</h2>
                    <input type="text" name="first_name" required placeholder="first name" <?php echo 'value="' . $first_name . '"'; ?>>
                    <h2>Last Name</h2>
                    <input type="text" name="last_name" required placeholder="last name"<?php echo 'value="' . $last_name . '"'; ?>>
                    <h2>Email</h2>
                    <input type="text" name="email" required placeholder="email"<?php echo 'value="' . $email . '"'; ?>>
                    <h2>Password</h2>
                    <input type="password" name="password" required placeholder="password">
                    <button type="submit" name="submit" class="signup">Sign Up</button>
                    <p>or</p>
                    <button class="signin"><a href="./loginnew.php">Sign In</a></button>
                </form>
            </div>
        </div>
    </div>
    <!----------------------footer----------------------------->

    <footer>
        <div class="footer-container">
            <div class="left-box">
                <h2>About Us</h2>
                <div class="left-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo perferendis totam est dolorem veritatis Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aut?</p>
                </div>
            </div>
            <div class="center-box">
                <h2>Adress</h2>
                <div class="center-content">
                    <ul>
                        <li>Galle</li>
                        <li>078963521</li>
                        <li>bitloards@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="right-box">
                <h2>Contact Us</h2>
                <div class="right-content">
                    <form>
                        <h3>Email</h3>
                        <input type="text" placeholder="email">
                        <h3>Message</h3>
                        <input type="text" placeholder="message">
                    
                        <button type="submit" class="footer-button">Send</button>
                        
                    </form>
                </div>
            </div>
        </div>
        <h4>copyright@bitLoards</h4>
    </footer>
    <script>
        var menuList = document.getElementById("menuList");

        menuList.style.maxHeight = "0px";

        function togglemenu(){
            if(menuList.style.maxHeight == "0px")
                {
                    menuList.style.maxHeight = "130px";
                }
            else
                {
                    menuList.style.maxHeight = "0px";
                }
        }
    </script>
</body>
</html>