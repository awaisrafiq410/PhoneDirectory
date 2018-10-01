<?php
    session_start();

   require_once("connect.php");
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    # Validate login credentials
    
    $result = mysqli_query($con," select * from user where email='$email';") or die(" Error ");
    $data = mysqli_fetch_array($result);

    if( $data['email']==$email )
    {
        if($data['password']==md5($pass))
        {
            $_SESSION['uid']=$data['id'];
            $_SESSION['authenticated']=true;           
            $_SESSION['uname']=$data['name'];
            setcookie('uname', $data['name'], time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie('uid', $data['id'], time() + (86400 * 30), "/"); // 86400 = 1 day
            header('Location: ../home.php') or die(" Error ");
        }
        
    }
        $_SESSION['login_error']=true;
        header("Location: index.php") or die(" Error ");
    mysqli_close($con);
  

?>