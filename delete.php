<?php 
    include 'connection.php';

    //If the 'id' variable is set in the URL, the record will be deleted.
    if(isset($_GET['pId'])){
        $pId = $_GET['pId'];

        //Write delete query
        $sql = "DELETE FROM product WHERE pId ='$pId'";

        //Execute query
        $result = $conn->query($sql);

        if($result == TRUE)
        {
            echo'<script>
            alert("Product successfully deleted from database");
            location = "admin-page.php";
            </script>';
            
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>

