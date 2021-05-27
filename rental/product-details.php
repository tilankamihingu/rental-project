<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="./style.css">
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
                <li><a href="">Contact</a></li>
                <li><a href="./login.php">Account</a></li>
            </ul>
            </nav>
            <a href="./cart.php"><img src="./images/cart.png" width="30px" height="30px" alt=""></a>
            <img src="./images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div> 
    
    <!------------singal product details--------------->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="./images/gallery-1.jpg" width="100%" id="ProductImg" alt="">
            
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="./images/gallery-1.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="./images/gallery-2.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="./images/gallery-3.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="./images/gallery-4.jpg" width="100%" class="small-img" alt="">
                    </div>
                </div>
            
            
            </div>
            <div class="col-2">
                <p>Home / T-shirt</p>
                <h1>Red Printed T-Shrirt by Hrx</h1>
                <h4>$50.00</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to Cart</a>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed obcaecati fugiat quos explicabo aliquam qui, praesentium ipsum dolore, voluptatem deserunt et voluptatum laudantium! Quo suscipit tempore distinctio dolor, quibusdam laborum.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure nesciunt maxime quis sed deleniti consequuntur velit aut architecto, placeat quibusdam, quasi totam similique iste vitae possimus incidunt ipsum consequatur tempore!
                </p>
            </div>
        </div>
    </div>

    <!-----title----------------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>
    
    <!----features products------>
    <div class="small-container">
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

<!---------------------js for product gallery-------------------------------------------->

        <script>
            var ProductImg = document.getElementById("ProductImg");
            var SmallImg = document.getElementsByClassName("small-img");

                SmallImg[0].onclick = function(){
                    ProductImg.src = SmallImg[0].src;
                }
                SmallImg[1].onclick = function(){
                    ProductImg.src = SmallImg[1].src;
                }
                SmallImg[2].onclick = function(){
                    ProductImg.src = SmallImg[2].src;
                }
                SmallImg[3].onclick = function(){
                    ProductImg.src = SmallImg[3].src;
                }
        </script>

</body>
</html>