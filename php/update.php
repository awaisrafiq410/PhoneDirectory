<?php 

    session_start();

    $_SESSION['success']="false";

    require_once("connect.php");

    $fname =  trim(strip_tags($_POST['fname']));
    $lname =  trim(strip_tags($_POST['lname']));    
    $mobile =  trim(strip_tags($_POST['mobile']));
    $cid =  trim(strip_tags($_POST['updatebtn']));    
    $uid=$_SESSION['uid'];

    $query ="UPDATE contacts SET fname='$fname',lname='$lname',mobile='$mobile' WHERE user_id='$uid' AND cid='$cid'";

    if ($con->query($query) === TRUE) {
        header("Location: ../dashboard.php");
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
    
    // Closing Connection with Server
    mysqli_close($con) or die(" Connection failed to close ! ") ;
?>