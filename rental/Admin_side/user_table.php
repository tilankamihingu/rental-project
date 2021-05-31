<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php 

	$user_list = '';

	// getting the list of users
	$query = "SELECT * FROM user WHERE is_deleted=0 ORDER BY first_name";
	$users = mysqli_query($connection, $query);

	verify_query($users);

	while ($user = mysqli_fetch_assoc($users)) {
		$user_list .= "<tr>";
		$user_list .= "<td>{$user['first_name']}</td>";
		$user_list .= "<td>{$user['last_name']}</td>";
		$user_list .= "<td>{$user['email']}</td>";
        $user_list .= "<td>{$user['last_login']}</td>";
		$user_list .= "<td><a href=\"delete-user.php?user_id={$user['id']}\" 
						onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
		$user_list .= "</tr>";
	}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Member Accounts</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <div class="appname"><h1>Member Account Information</h1><hr></div>
    </header>

    <main>

        <table class="masterlist">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>email</th>
                <th>Last Login</th>
                <th>Delete</th>
            </tr>

            <?php echo $user_list; ?>

        </table>


    </main>
</body>

</html>