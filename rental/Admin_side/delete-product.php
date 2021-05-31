<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php 

	if (isset($_GET['product_id'])) {
		// getting the product information
		$product_id = mysqli_real_escape_string($connection, $_GET['product_id']);

			// deleting the product
			$query = "UPDATE product SET is_deleted = 1 WHERE id = {$product_id} LIMIT 1";

			$result = mysqli_query($connection, $query);

			if ($result) {
				// product deleted
				header('Location: product_table.php?msg=product_deleted');
			} else {
				header('Location: product_table.php?err=product_failed');
			}
		
		
	} else {
		header('Location: product_table.php');
	}
?>