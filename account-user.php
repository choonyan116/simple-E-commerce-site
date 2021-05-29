<?php 
    include 'checkSession.php';
    include 'connection.php';
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
                        <span><a href="logout.php">Log Out</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Product section in account user-->
    <div class="small-container">
        <h2 class="title">All Product</h2>
        <div class="row">
            <?php
                $sql = "SELECT * FROM product ORDER BY pId ASC";
                $result = $conn->query($sql);
                //Execute query.
                if($result->num_rows > 0)
                {
                    //Display all product stored in database.
                    while($row = $result->fetch_assoc())
                    {
                    ?>
                    
                        <div class="col-4">
                        <form method="post" action="cart.php?action=add&id=<?php echo $row["pId"];?>">
                            <a href="<?php echo $row['pLink']; ?>"><img src="<?php echo $row['pImgPath']; ?>" ></a>
                            <h4><?php echo $row['pName']; ?></h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>RM<?php echo number_format($row['pPrice'], 2); ?></p>
                        </div>
                <?php
                    }
                } ?>
        </div>
    </div>
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