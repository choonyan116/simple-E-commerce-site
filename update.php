<?php 
    include 'connection.php';

    //If the 'id' variable is set in the URL, the record will be edited.

    if(isset($_GET['pId'])){
        $productId = $_GET['pId'];

        //SQL for obtaining data.
        $sql= "SELECT * FROM product WHERE pId = '$productId'";

        //Execute the sql
        $result = $conn->query($sql);

        if($result->num_rows >0)
        {
            while($row = $result->fetch_assoc()){
                $pName = $row['pName'];
                $pImgPath = $row['pImgPath'];
                $pDesc = $row['pDesc'];
                $pPrice = $row['pPrice'];
                $pQuant = $row['pQuant'];
                $pLink  = $row['pLink'];
            }

        }
    }
    else{
        //If the 'id' value is not valid, redirect the user back to php page.
        echo "Invalid product id.";
        header('Location: admin-page.php');
    }
    //If the update button is clicked, php will need to process the form.
    if(isset($_POST['update'])){
            $pName = $_POST["pName"];
            $pImgPath = $_POST["pImgPath"];
            $pDesc = $_POST["pDesc"];
            $pPrice = $_POST["pPrice"];
            $pQuant = $_POST["pQuant"];
            $pLink  = $_POST["pLink"];

        //Update query
        $sql="UPDATE product SET pName ='$pName', pImgPath= '$pImgPath', pDesc = '$pDesc',
                pPrice= '$pPrice', pQuant='$pQuant', pLink='$pLink' WHERE pId ='$productId'";

        //Execute the query
        $result = $conn->query($sql);

        if($result == TRUE)
        {
            echo '<script>alert("Product successfully updated in database");
            location = "admin-page.php";
            </script>';
        }
        else
        {
            echo "Error: ". $sql . "<br>". $conn->error;
        }

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
    <!--Update product-->
        <h2 class="title">Product update form</h2>
            <form action="" method="POST" class="create-form">
                    <fieldset>
                        <legend>Add new product: </legend>
                        <label>Product Name: </label><br>
                        <input class="form-style" type="text" name="pName" value ="<?php echo $pName ?>">
                        <br>
                        <label>Product Image Path: </label> <br>
                        <input class="form-style" type="text" name="pImgPath" value ="<?php echo $pImgPath ?>">
                        <br>
                        <label>Product Description: </label><br>
                        <input class="form-style" type="text" name="pDesc" value ="<?php echo $pDesc ?>">
                        <br>
                        <label>Product Price: </label><br>
                        <input class="form-style" type="text" name="pPrice" value ="<?php echo $pPrice ?>">
                        <br>
                        <label>Product Quantity: </label><br>
                        <input class="form-style" type="number" name="pQuant" value ="<?php echo $pQuant ?>">
                        <br>
                        <label>Product Link: </label><br>
                        <input class="form-style" type="text" name="pLink" value ="<?php echo $pLink ?>">
                        <br>
                        <input id="form-sm" type="submit" name="update" value="Update product">
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
        
            
        
           