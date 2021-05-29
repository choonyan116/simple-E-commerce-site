<?php 
    include 'connection.php';
    include 'checkSession.php';
    $sql = "SELECT * FROM users ";
    $result = $conn->query($sql);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <!--Navbar-->
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo/myshopee.png" alt="store-logo" width="125px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="admin-page.php">Update Product</a></li>
                        <li><a href="admin_panel_user_mod.php">Update User</a></li>
                        <li><a href="error-log.php">Error log</a></li>
                        
                    </ul>
                </nav>
                <img src="images/shopping-cart.png" alt="cart" width="40px">
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

    <div class="container" >
        <h2>User Add/Update/Delete</h2>
        <a class="btn btn-success pull-right" href="create-user.php">Add new user +</a>
        <table class="table table-bordered">
            <tr>
                <th>User ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>User type</th>
                <th>Operation</th>
            </tr>
            <?php
                if($result->num_rows >0) {
                    while($row = $result->fetch_assoc()){
            ?>
                <tr>
                    <td class="data"><?php echo $row['usersId']; ?></td>
                    <td class="data"><?php echo $row['usersName']; ?></td>
                    <td class="data"><?php echo $row['usersEmail']; ?></td>
                    <td class="data"><?php echo $row['usersUid']; ?></td>
                    <td class="data"><?php echo $row['usersPwd']; ?></td>
                    <td class="data"><?php echo $row['usersType']; ?></td>
                    <td class="data"><a class="btn btn-info" href="update-user.php?uId=<?php echo $row['usersId']; ?>">Update</a>
                    <a class="btn btn-danger" href="delete-user.php?uId=<?php echo $row['usersId']; ?>">Remove</a></td>
                </tr>

               <?php  }
                }
                ?>
        </table>
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