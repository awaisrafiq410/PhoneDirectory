<?php require 'inc/header.php';?>

<div class="container" style="max-width: 330px;">
    <form class="form-group" method="POST" action="php/create.php">
        <h1 class="h3 mb-3 font-weight-normal">Create New Contact</h1>
        <label for="inputText" class="sr-only">First Name</label>
        <input type="text" id="inputText" name="fname" class="form-control" placeholder="Enter Your  First Name" required autofocus><br>
        <label for="inputText" class="sr-only">Last Name</label>
        <input type="text" id="inputText" name="lname" class="form-control" placeholder="Enter Your  Last Name" required autofocus><br>
        <label for="inputNumber" class="sr-only">Mobile No.</label>
        <input type="tel" id="inputNumber" name="mobile" class="form-control" placeholder="Mobile No. e.g:+923XXXXXXXXX" maxlength="13" pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" required autofocus><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">ADD</button>
    </form>
</div>

<?php require 'inc/footer.php';?>