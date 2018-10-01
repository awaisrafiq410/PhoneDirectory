<?php
session_start();
require_once("connect.php");
$uid=$_SESSION['uid'];
list($fname,$lname,$mobile,$pid,$cid) = explode(":",$_POST['btndelete']);
$res=mysqli_query($con,"SELECT numbers.mobile from numbers where cid=$cid");
$rows=mysqli_num_rows($res);
if($rows==1){
    $query ="DELETE FROM numbers WHERE pid=$pid AND cid=$cid;";
    $query.= "DELETE FROM contacts WHERE cid=$cid";
}
else
{
    $query ="DELETE FROM numbers WHERE pid=$pid AND cid=$cid";
}
if ($con->multi_query($query) === TRUE) {
    header("Location: ../dashboard.php");
} else {
    echo "Error: " . $query . "<br>" . $con->error;
}
// Closing Connection with Server
mysqli_close($con) or die(" Connection failed to close ! ") ;
    
?>