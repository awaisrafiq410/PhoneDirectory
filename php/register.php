<?php

    session_start();

    $_SESSION['success']="false";

    require_once("connect.php");

    $name =  trim(strip_tags($_POST['name']));
    $mobile =  trim(strip_tags($_POST['mobile']));
    $email =  trim(strip_tags($_POST['email']));
    $pass =  trim(strip_tags($_POST['password']));
    $pass = md5($pass);

    $query = "INSERT INTO user (id, name, mobile, email, password) values ('','$name','$mobile','$email','$pass')";

    if ($con->query($query) === TRUE) {

        header("Location: ../index.php");
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
    
    // Closing Connection with Server
    mysqli_close($con) or die(" Connection failed to close ! ") ;


?>