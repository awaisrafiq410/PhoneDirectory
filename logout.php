<?php 

if(isset($_COOKIE['uname'])){
    setcookie('uname', $data['name'], time() - (86400 * 30), "/");
    header('Location: index.php');
}
?>