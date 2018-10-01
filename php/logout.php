<?php 

session_start();

if(isset($_SESSION['uname'])){
    //setcookie('uname', $data['name'], time() - (86400 * 30), "/");
    unset($_SESSION['uid']);
    unset($_SESSION['uname']);
    unset($_SESSION['authenticated']);
    session_destroy();
    header('Location: ../index.php');
    
}
?>