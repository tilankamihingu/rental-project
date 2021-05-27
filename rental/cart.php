<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head> -->
<body>
    
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="./advertising.php"><img src="./images/logo.png" width="125" alt=""></a>
            </div>
            <nav>
            <ul id="MenuItems">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./products.php">Products</a></li>
                <li><a href="./addPost.php">Add Post</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="./login.php">Account</a></li>
            </ul>
            </nav>
            <a href="./cart.php"><img src="./images/cart.png" width="30px" height="30px" alt=""></a>
            <img src="./images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div> 
    
    <!----------cart item details--------------->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="./images/buy-1.jpg" alt="">
                        <div>
                            <p>Red Printed T-Shirt</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="">remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="./images/buy-2.jpg" alt="">
                        <div>
                            <p>Red Printed T-Shirt</p>
                            <small>Price: $75.00</small>
                            <br>
                            <a href="">remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$75.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="./images/buy-3.jpg" alt="">
                        <div>
                            <p>Red Printed T-Shirt</p>
                            <small>Price: $70.00</small>
                            <br>
                            <a href="">remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$70.00</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>subtotal</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$230.00</td>
                </tr>
            </table>
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