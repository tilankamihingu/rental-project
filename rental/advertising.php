<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php 
	// checking if a user is logged in
	if (!isset($_SESSION['user_id'])) {
		header('Location: index.php');
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
               <a href="./advertising.php"><img src="./images/logo.png" width="125" alt=""></a>
            </div>
            <nav>
            <ul id="MenuItems">
                <li><a href="./advertising.php">Home</a></li>
                <li><a href="./products.php">Products</a></li>
                <li><a href="./addPost.php">Add Post</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="./index.php">Account</a></li>
            </ul>
            </nav>
            <a href="./cart.php"><img src="./images/cart.png" width="30px" height="30px" alt=""></a>
            <img src="./images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Choose the items<br> you want!.</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates non repudiandae repellat. Rem illum quibusdam officiis officia quod. Perferendis, accusamus!</p>
                <a href="" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="./images/image1.png" alt="">
            </div>
        </div>
    </div> 
    </div>
    
    <!-------features categories---------->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="./images/category-1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="./images/category-2.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="./images/category-3.jpg" alt="">
                </div>
            </div>
        </div> 
    </div>

    <!----features products------>
    <div class="small-container">
        <h2 class="title">Features Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="./product-details.php"><img src="./images/product-1.jpg" alt=""></a>
                <a href="./product-details.php"><h4>Red Prinnted T-Shirt</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-2.jpg" alt="">
                <h4>Red Prinnted T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-3.jpg" alt="">
                <h4>Red Prinnted T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-4.jpg" alt="">
                <h4>Red Prinnted T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="./images/product-5.jpg" alt="">
                <h4>Red Prinnted T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-6.jpg" alt="">
                <h4>Red Prinnted T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-7.jpg" alt="">
                <h4>Red Prinnted T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-8.jpg" alt="">
                <h4>Red Prinnted T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="./images/product-9.jpg" alt="">
                    <h4>Red Prinnted T-Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="./images/product-10.jpg" alt="">
                    <h4>Red Prinnted T-Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="./images/product-11.jpg" alt="">
                    <h4>Red Prinnted T-Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="./images/product-12.jpg" alt="">
                    <h4>Red Prinnted T-Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
            </div>
        </div>
    </div>

    <!--------offer----------->
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="./images/exclusive.png" class="offer-img" alt="">
                    </div>
                    <div class="col-2">
                        <p>Exclusive Available on RedStore</p>
                        <h1>Smart Band 4</h1>
                        <small>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores dolores laudantium, sapiente commodi explicabo architecto natus fuga animi suscipit! Eaque doloremque voluptatibus nobis illum repellendus ipsum iste! Perferendis, quis laboriosam!
                        </small>
                        <a href="" class="btn">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>

        <!---testimonial---->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non culpa quod, provident exercitationem quisquam placeat inventore esse aliquid in totam aspernatur, quae natus accusamus asperiores possimus laborum sed numquam! Laborum.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="./images/user-1.png" alt="">
                        <h3>Sean Parker</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non culpa quod, provident exercitationem quisquam placeat inventore esse aliquid in totam aspernatur, quae natus accusamus asperiores possimus laborum sed numquam! Laborum.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="./images/user-2.png" alt="">
                        <h3>Mike smith</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non culpa quod, provident exercitationem quisquam placeat inventore esse aliquid in totam aspernatur, quae natus accusamus asperiores possimus laborum sed numquam! Laborum.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="./images/user-3.png" alt="">
                        <h3>Marble Joe</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-------brands--------->
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="./images/logo-godrej.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="./images/logo-oppo.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="./images/logo-coca-cola.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="./images/logo-paypal.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="./images/logo-philips.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-----------footer--------------->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Downoad App for Android and ios mobile phone.</p>
                        <div class="app-logo">
                            <img src="./images/play-store.png" alt="">
                            <img src="./images/app-store.png" alt="">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="./images/logo-white.png" alt="">
                        <p>Our Purpose Is TO Sustainably Make the Pleasure and Benifits of Sports Accessible to the Many.</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">copyright 2021 - Rental Services</p>
            </div>
        </div>

<!------------------js for toggle menu---------------------------->
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