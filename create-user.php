<?php 
    include 'connection.php';

    if(isset($_POST['submit'])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $username=$_POST["uid"];
        $password=$_POST["pwd"];
        $user_type=$_POST["user-type"];


        $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd, usersType) VALUES
                ('".$name."', '".$email."', '".$username."', '".md5($password)."', '".$user_type."')";

        $result= $conn->query($sql);

        if($result == TRUE) {
            echo '<script>alert("user successfully added in database");
            location = "admin_panel_user_mod.php";
            </script>';
        }
        else{
            echo "Error: ". $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
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
                        <li><a href="product.html">Product</a></li>
                        <li><a href="create.php">Create product</a></li>
                        <li><a href="admin-page.php">Admin-page</a></li>
                        <li><a href="index.html">Registered user</a></li>
                    </ul>
                </nav>
                <img src="images/shopping-cart.png" alt="cart" width="40px">
                <img class="menu-icon" src="images/bars.png" alt="menu-bar" onclick="menuOpen()">
            </div>
        </div>
</div>
    

    <h2 class="title">Create new user record</h2>
        <form action=" " method="POST" class="create-form">
            <fieldset>
                <legend>Add new user: </legend>
                <label>Full Name: </label><br>
                <input class="form-style" type="text" name = "name" required>
                <br>
                <label>Email: </label> <br>
                <input class="form-style" type="text" name = "email" required>
                <br>
                <label>Username: </label><br>
                <input class="form-style" type="text" name = "uid" required>
                <br>
                <label>Password: </label><br>
                <input class="form-style" type="password" name = "pwd" required>
                <br>
                <label>User type: </label><br>
                <input class="form-style" type="text" name = "user-type" required>
                <br>
                <input id="form-sm" type="submit" name="submit" value="Add new user" required>
            </fieldset>
        </form>

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