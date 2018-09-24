<?php
    require_once("connect.php");
    $uid=$_COOKIE['uid'];
    $result = mysqli_query($con,"SELECT fname,lname,phone FROM contacts WHERE user_id=$uid;") or die(" Error ");

    if ($result->num_rows > 0) {
        echo "<tr><th>Name</th><th>Phone</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["fname"]." ".$row["lname"]."</td><td>".$row["phone"]."</td></tr>";
        }
    } else {
        echo '<div class="text-alert"> No Contact Found !</div>
        <a href="create.php" class="btn btn-default margin-top-sm">Save Now</a>';
    }
?>