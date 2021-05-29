<?php 
    include 'connection.php'; 
    session_start();
?>
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
                        <li><a href="product.html">Product</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="account.php">Account</a></li>
                    </ul>
                </nav>
                <img src="images/shopping-cart.png" alt="cart" width="40px">
                <img class="menu-icon" src="images/bars.png" alt="menu-bar" onclick="menuOpen()">
            </div>
        </div>
    </div>

    <!--Account detail-->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="signup()">Sign Up</span>
                            <hr id="Indicator">
                        </div>

                        <form action="account.php" method="post" id="LoginForm">
                        <?php
                                if(isset($_POST["ecommerce"])){
                                    $usersType = $_POST["usersType"];
                                    $username=$_POST["username"];
                                    $password=$_POST["password"];
                                    $sql= "SELECT usersUid, usersPwd, usersType FROM users";

                                    $result= $conn->query($sql);
                                    if($result->num_rows >0)
                                    {
                                        while($row= $result->fetch_assoc()){
                                            if($row["usersUid"]==$username&&$row["usersPwd"]== md5($password)&&$row["usersType"]=="admin"){
                                                $_SESSION['username'] = $username;
                                                header("Location: admin-page.php");
                                            }
                                            else if($row["usersUid"]==$username&&$row["usersPwd"]== md5($password)&&$row["usersType"]=="user"){
                                                echo"<script>alert('Login successful')</script>";
                                                //Create session for the user.
                                                $_SESSION['username'] = $username;
                                                header("Location: account-user.php");
                                            }
                                            else{

                                                echo"<script>alert('username and password is not match')</script>";
                                                $err_query = "INSERT INTO error_log (attempt_username, attempt_password) VALUES ('".$username."','".$password."')";
                                                $err_result = $conn->query($err_query);
                                            }
                                        }
                                        
                                    }
                                    else
                                    {
                                        echo"0 results";
                                    }
                                    $conn->close();
                                }
                            ?>
                            <div class="select-style">
                                <select name="usersType">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <input type="text" name="username" placeholder="Username" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <button type="submit" name="ecommerce" class="btn">Login</button>
                            <a href="">Forgot password</a>
                        </form>

                       <!-- <form action=" //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="RegForm"> -->
                        <form action="account.php" method="post" id="RegForm">
                        <?php
                            $nameValid = $emailValid= $unameValid = $passValid= 0;
					        if(isset($_POST["submit"])){

                                if (empty($_POST["name"]))
                                {
                                    $nameErrMsg = "*This is a required field";
                                }
                                else
                                {
                                    $nameValid = 1;
                                }

                                if (empty($_POST["email"]))
                                {
                                    $emailErrMsg = "*This is a required field";
                                }
                                else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false)
                                {
                                    $emailErrMsg = "*Invalid e-mail";
                                }
                                else
                                {
                                    $emailValid = 1;
                                }

                                if (empty($_POST["uid"]))
                                {
                                    $unameErrMsg = "*This is a required field";
                                }
                                else if (strlen($_POST["uid"]) < 5)
                                {
                                    $unameErrMsg = "*The username must be at least 5 charaters long";
                                }
                                else if (preg_match_all("/[0-9]/", $_POST["uid"]) == 0 && preg_match_all("/[A-Za-z]/", $_POST["uid"]))
                                {
                                    $unameErrMsg = "*The username contain at least 1 numeric and 1 alphabetic character";
                                }
                                else
                                {
                                    $unameValid = 1;
                                }

                                if (empty($_POST["pwd"]) || empty($_POST["repwd"]))
                                {
                                    if (empty($_POST["pwd"]))
                                    {
                                        $passErrMsg = "*This is a required field";
                                    }
                                    if (empty($_POST["repwd"]))
                                    {
                                        $rpassErrMsg = "*This is a required field";
                                    }
                                }
                                else if ($_POST["pwd"] != $_POST["repwd"])
                                {
                                    $passErrMsg = "*Password did not match";
                                    $rpassErrMsg = "*Password did not match";
                                }
                                else
                                {
                                    $passValid = 1;
		                        }

                                if($nameValid == 1 && $emailValid==1 && $unameValid == 1 && $passValid==1)
                                {
                                    $name=$_POST["name"];
                                    $email=$_POST["email"];
                                    $username=$_POST["uid"];
                                    $password=$_POST["pwd"];
                                    $repeat_password=$_POST["repwd"];

                                    
                                    
                                    if($password != $repeat_password)
                                    {
                                        echo"<script>alert('Password not match. Please re-enter again.')</script>";
                                    }
                                    else
                                    {
                                        //Change table name "users" to own table name OR create a new table call "users" in database.
                                        $sql= "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES ('".$name."','".$email."','".$username."','".md5($password)."')";

                                        if($conn->query($sql)== TRUE){
                                            
                                            echo"<script>alert('New account created. Please log in.')</script>";
                                        }
                                        else{
                                            echo "Error: " .$sql. "<br>" .$conn->error;
                                        }
                                    }    
                                }

                                   
                            }
                        ?>
                            <input type="text" name="name" placeholder="Full name" required>
                            <span><?php if(isset($nameErrMsg)) echo $nameErrMsg; ?></span>
                            <input type="email" name="email" placeholder="Email" required>
                            <span><?php if(isset($emailErrMsg)) echo $emailErrMsg; ?></span>
                            <input type="text" name="uid" placeholder="Username" required>
                            <span><?php if(isset($unameErrMsg)) echo $unameErrMsg; ?></span>
                            <input type="password" name="pwd" placeholder="Password" required>
                            <span><?php if(isset($passErrMsg)) echo $passErrMsg; ?></span>
                            <input type="password" name="repwd" placeholder="Re-enter the password" required>
                            <span><?php if(isset($rpassErrMsg)) echo $rpassErrMsg; ?></span>
                            <button type="submit" name="submit" class="btn">Sign Up</button>
                        </form>

                    </div>
                </div>
                <div class="col-2">
                    <img src="images/login-background.jpg" width="100%">
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

<!--JS for toggle menu-->
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register()
    {
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }

    function login()
    {
        RegForm.style.transform = "translateX(500px)";
        LoginForm.style.transform = "translateX(500px)";
        Indicator.style.transform = "translateX(0px)";
    }


</script>

</script>
</body>
