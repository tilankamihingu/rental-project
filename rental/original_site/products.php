<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ee4a922350.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="./products.css?v=<?php echo time(); ?> ">
</head>
<body>
    <div class="product-full">
    <div class="scroll-button">
        <i class="fas fa-arrow-circle-up"></i>
    </div>
    <div class="full">
    <div class="navbar">
        <img src="../images/logo.png" alt="" class="logo">
        <nav>
            <ul id="menuList">
                <li><a href="./home.php">Home</a></li>
                <li><a href="./products.php">Products</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="./loginnew.php">Login/Register</a></li>
            </ul>
            
        </nav>
        <img src="../images/menu.png" alt="" class="menu-icon" onclick="togglemenu()">
    </div>
    <!------------------products------------------------>
    <div class="product-container">
        <div class="product-top">
            <h1>Products</h1>
            <p>Select Your Category</p>
            <select>
                <option>Select..</option>
                <option >Clothes</option>
                <option >Car</option>
                <option >Photo</option>
</select>
        </div>
    <div class="products">
    <?php
            $connection = mysqli_connect('localhost', 'root', '', 'userdb');
            $sql = "SELECT * FROM product";
            $result = mysqli_query($connection , $sql);
            while($row = mysqli_fetch_array($result)){ 
                    echo"<div class='product-card'>";
                        echo"<img src='postimages/".$row['image']."' alt=''>";
                        echo"<div class='box'>";
                            echo"<h3>".$row['title']."</h3>";
                            echo"<h4>".$row['price'].".00 (per day)</h4>";
                            echo"<p>".$row['description']."</p>";
                            echo"<a href='./details.php?id=".$row['id']."'><button >View more</button></a>";

           echo "</div>";
        echo"</div>";
          }


    ?>
    
    </div>
    </div>
    </div>
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
                <div class="foot-icons">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
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
    </div>
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
        const scrollBtn = document.querySelector('.scroll-button')

        window.addEventListener('scroll', () =>{
            if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
                scrollBtn.style.display = 'block';
            }
            else{
                scrollBtn.style.display = 'none';
            }
        })
        scrollBtn.addEventListener('click' , () => {
            window.scroll({
                top: 0,
                behavior: "smooth"
            })
        })
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

</body>
</html>