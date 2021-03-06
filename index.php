<?php 
    include 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MYSHOPEE | Ecommerce site</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;1,100;1,300&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo/myshopee.png" alt="store-logo" width="125px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="grocery.html">Products</a></li>
                        <li><a href="index.html">About</a></li>
                        <li><a href="index.html">Contact</a></li>
                        <li><a href="index.html">Account</a></li>
                    </ul>
                </nav>
                <img src="images/shopping-cart.png" alt="cart" width="40px">
                <img class="menu-icon" src="images/bars.png" alt="menu-bar" onclick="menuOpen()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Buy, Buy, Buy,<br>Don't wait just buy. </h1>
                    <p>Har? You want to wait some more har? No more offer liao~</p>
                    <a href="" class="btn">Explore Now &#10140;</a>
                </div>
                <div class="col-2">
                    <img src="background.jpg" alt="background">
                </div>
            </div>
        </div>
    </div>    
    <!--featured categories-->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3" id="category">
                    <img src="images/cat-fresh_vege.jpg" alt="vegetable">
                    <div class="overlay">
                        <div class="cat-text">Fresh Vegetable</div>
                    </div>
                </div>
                <div class="col-3" id="category">
                    <img src="images/cat-drink.jpeg" alt="drink">
                    <div class="overlay">
                        <div class="cat-text">Drink</div>
                    </div>
                </div>
                <div class="col-3" id="category">
                    <img src="images/cat-grocery.jpg" alt="grocery">
                    <div class="overlay" >
                        <div class="cat-text">Grocery</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--featured products-->
    <div class="small-container">
        <h2 class="title">Featured products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/Honey-Stars-Eco-Pack 10x500g.jpg" alt="honey-stars 10x500g">
                <h4>Honey Stars Eco Pack (10x500g)</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>RM15.00</p>
            </div>
            <div class="col-4">
                <img src="images/Nestle-Cereal-Koko-Krunch-170-gm.png" alt="koko-krunch 10x500g">
                <h4>Koko Krunch (170g)</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>RM15.00</p>
            </div>
            <div class="col-4">
                <img src="images/milo-2kg.jpg" alt="milo 2kg">
                <h4>Honey Stars Eco Pack (10x500g)</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>RM15.00</p>
            </div>
        </div>
    </div>

    <!--Offer-->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-1">
                    <img src="images/xiaomi-robot-vacuum.jpg" alt="premium" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on MYSHOPEE</p>
                    <h1>Xiaomi Mi Robot Vacuum Mop</h1>
                    <small>
                        The key to cleaning is suction power. The Japanese Nidec motor delivers powerful 2200 Pa 
                        suction* for quick removal of floor dust and thorough cleaning of gaps.
                    </small>
                    <br>
                    <a href="" class="btn">Buy Now &#10140;</a>
                </div>
            </div>
        </div>
    </div>

    <!--testimonial-->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>The online store is good, fast delivery and freindly customer services.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/person.png">
                    <h3>Alex</h3>
                </div>
                <div class="col-3">
                    <p>The online store is good, fast delivery and freindly customer services.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/person.png">
                    <h3>Alex</h3>
                </div>
                <div class="col-3">
                    <p>The online store is good, fast delivery and freindly customer services.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/person.png">
                    <h3>Alex</h3>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-2">
                    <img src="images/logo/myshopee.png">
                    <p>Download App for Android and IOS platform</p>
                </div>
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS platform</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog post</li>
                        <li>Return Policy</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <!--<ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul>-->
                    <div class="social-media">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-youtube"></a>
                    </div>
                </div>
            </div>
            <hr>
            <p class="copyright">Designed by: Ng Choon Yan</p>
        </div>
    </div>
<!--JavaScript-->
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight= "0px";

    function menuOpen(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight= "200px";
        }
        else{
            MenuItems.style.maxHeight= "0px";
        }
    }
</script>

</body>
</html>