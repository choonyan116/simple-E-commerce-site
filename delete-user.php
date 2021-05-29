<?php 
    include 'connection.php';

    //If the 'id' variable is set in the URL, the record will be deleted.
    if(isset($_GET['uId'])){
        $uId = $_GET['uId'];

        //Write delete query
        $sql = "DELETE FROM users WHERE usersId ='$uId'";

        //Execute query
        $result = $conn->query($sql);

        if($result == TRUE)
        {
            echo'<script>
            alert("User successfully deleted from database");
            location = "admin_panel_user_mod.php";
            </script>';
            
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>

