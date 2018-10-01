<?php
    require_once("connect.php");
    $uid=$_COOKIE['uid'];
    $result = mysqli_query($con,"SELECT contacts.fname,contacts.lname,numbers.mobile,numbers.pid,contacts.cid FROM contacts,numbers WHERE user_id=$uid AND contacts.cid=numbers.cid ORDER BY contacts.cid;") or die(" Error ");

    if ($result->num_rows > 0) {
        echo "<tr><th>Name</th><th>Phone</th><th></th><th></th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row['fname']." ".$row['lname']."</td><td>".$row['mobile']."</td>
            <td> <form  method='post' action='update.php'> <button class='btn btn-default'  name='btnupdate' type='submit' value='".$row['fname'].":".$row['lname'].":".$row['mobile'].":".$row['pid'].":".$row['cid']."'>Edit</button> </form></td>
			<td> <form  method='post' action='php/delete.php'> <button class='btn btn-default'  name='btndelete' type='submit' value='".$row['fname'].":".$row['lname'].":".$row['mobile'].":".$row['pid'].":".$row['cid']."'>Delete</button> </form></td>
            </tr>";
        }
    } else {
        echo '<div class="text-alert"> No Contact Found !</div>
        <a href="create.php" class="btn btn-default margin-top-sm">Save Now</a>';
    }
?>