<?php 
    session_start();

    $_SESSION['success']="false";

    require_once("connect.php");

    $fname =  trim(strip_tags($_POST['fname']));
    $lname =  trim(strip_tags($_POST['lname']));    
    $mobile =  trim(strip_tags($_POST['mobile']));
    $uid=$_SESSION['uid'];
    $query ="INSERT INTO contacts (cid, fname, lname, user_id) VALUES ('','$fname','$lname','$uid');";

    if ($con->query($query) === TRUE) {
        $query2="INSERT INTO numbers (pid,mobile,cid) VALUES ('','$mobile','".mysqli_insert_id($con)."')";
        if($con->query($query2)===TRUE){
        header("Location: ../dashboard.php");
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
}
    
    // Closing Connection with Server
    mysqli_close($con) or die(" Connection failed to close ! ") ;
?>