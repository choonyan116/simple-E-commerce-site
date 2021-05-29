<?php 
    include 'connection.php';

    //If the 'id' variable is set in the URL, the record will be deleted.
    if(isset($_GET['eId'])){
        $eId = $_GET['eId'];

        //Write delete query
        $sql = "DELETE FROM error_log WHERE id ='$eId'";

        //Execute query
        $result = $conn->query($sql);

        if($result == TRUE)
        {
            echo'<script>
            alert("Error record successfully deleted from database");
            location = "error-log.php";
            </script>';
            
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>

