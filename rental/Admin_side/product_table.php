<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php 

	$product_list = '';

	// getting the list of users
    $query = "SELECT * FROM product WHERE is_deleted=0  ORDER BY id";
	$products = mysqli_query($connection, $query);

	verify_query($products);

	while ($product = mysqli_fetch_assoc($products)) {
		$product_list .= "<tr>";
		$product_list .= "<td>{$product['title']}</td>";
		$product_list .= "<td>{$product['category']}</td>";
        $product_list .= "<td>{$product['contact']}</td>";
        $product_list .= "<td>{$product['description']}</td>";
        $product_list .= "<td>{$product['address']}</td>";
		$product_list .= "<td><a href=\"delete-product.php?	product_id={$product['id']}\" 
						onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                        $product_list .= "</tr>";
	}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product table</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <div class="appname"><h1>Advertiesement Information</h1><hr></div>
    </header>

    <main>

        <table class="masterlist">
            <tr>
                <th>title</th>
                <th>category</th>
                <th>contact</th>
                <th>description</th>
                <th>address</th>
                <th>Delete</th>
            </tr>

            <?php echo $product_list; ?>

        </table>


    </main>
</body>

</html>