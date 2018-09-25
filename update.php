<?php require 'inc/header.php';?>
<?php 

   // $mobile =  trim(strip_tags($_POST['btnupdate']));
    $uid=$_SESSION['uid'];
    list($fname,$lname,$mobile,$cid) = explode(":",$_POST['btnupdate']);
?>
<div class="container" style="max-width: 330px;">
    <form class="form-group" method="POST" action="php/update.php">
        <h1 class="h3 mb-3 font-weight-normal">Update Contact</h1>
        <input type="text" id="inputText" value=<?php echo $fname; ?> name="fname" class="form-control" placeholder="Enter Your  First Name" required autofocus><br>
        <input type="text" id="inputText"  value=<?php echo $lname; ?> name="lname" class="form-control" placeholder="Enter Your  Last Name" required autofocus><br>
        <input type="tel" id="inputNumber" value=<?php echo $mobile; ?> name="mobile" class="form-control" placeholder="Mobile No. e.g:+923XXXXXXXXX" maxlength="13" pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" required autofocus><br>
        <button class="btn btn-lg btn-primary btn-block" value=<?php echo $cid; ?> name="updatebtn"  type="submit">Update</button>
    </form>
</div>

<?php require 'inc/footer.php';?>