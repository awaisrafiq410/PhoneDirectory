<?php
session_start();
require_once("connect.php");
$uid=$_SESSION['uid'];
list($fname,$lname,$mobile,$pid,$cid) = explode(":",$_POST['btndelete']);

$query ="DELETE FROM numbers WHERE pid=$pid AND cid=$cid";

    if ($con->query($query) === TRUE) {
        header("Location: ../dashboard.php");
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
    
    // Closing Connection with Server
    mysqli_close($con) or die(" Connection failed to close ! ") ;
?>