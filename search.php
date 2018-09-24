<?php require 'inc/header.php';?>

    <div class="container" style="max-width: 500px;">
                <h1 align="center"> Search Contact </h1> <br/><br/>
                <form class="form-group" action="showSearch.php" method="POST">
                    <div class="input-group">

                        <input type="text" name="txtsearch" id="txtsearch" class="form-control" placeholder="Enter Keyword to Search" required />
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" id="btnsearch"><span class="glyphicon glyphicon-search"></span>&nbsp; Search</button>
                        </span>
                    </div> <br/>
                    <label class="radio-inline"><input type="radio" id="txtchoice" name="txtchoice" value="fname" checked>First Name</label>
                    <label class="radio-inline"><input type="radio" id="txtchoice" name="txtchoice" value="lname">Last Name</label>
                    <label class="radio-inline"><input type="radio" id="txtchoice" name="txtchoice" value="mobile">Mobile Number</label>
                    <br/<br/><br/><br/>
                </form>
    </div>

<?php require 'inc/footer.php';?>