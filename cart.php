<?php 
    include 'checkSession.php' 
?>
<html>
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
                        <li><a href="product.html">Product</a></li>
                        <li><a href="index.html">About</a></li>
                        <li><a href="index.html">Contact</a></li>
                        <li><a href="index.html">Account</a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/shopping-cart.png" alt="cart" width="40px"></a>
                <img class="menu-icon" src="images/bars.png" alt="menu-bar" onclick="menuOpen()">
                <div class="dropdown">
                    <img class="user-pic"  src="images/user.png" width="40px" style="margin:20px;">
                    <div class="dropdown-content">
                        <span>Username:<?php echo $_SESSION['username'] ?></span>
                        <span><a href="account.php">Log Out</a></span>
                    </div>
                </div>
            </div>
        </div>

        <!--Cart section-->
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
                        <img src="images/Honey-Stars-Eco-Pack 10x500g.jpg" alt="">
                        <div>
                            <p>Honey Stars Eco Pack (10x500g)</p>
                            <small>Price: RM50.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>RM50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/Honey-Stars-Eco-Pack 10x500g.jpg" alt="">
                        <div>
                            <p>Honey Stars Eco Pack (10x500g)</p>
                            <small>Price: RM50.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>RM50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/Honey-Stars-Eco-Pack 10x500g.jpg" alt="">
                        <div>
                            <p>Honey Stars Eco Pack (10x500g)</p>
                            <small>Price: RM50.00</small><br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>RM50.00</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>RM230.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>RM10.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>RM240.00</td>
                </tr>
            </table>
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
</body>
</html>