<?php
			require_once("connect.php");
			$keyword=$_POST['txtsearch'];
			$criteria=$_POST['txtchoice'];
			$uid = $_SESSION['uid'];

			$result = mysqli_query($con," SELECT fname, lname,phone FROM contacts where $criteria='$keyword' AND user_id='$uid' ");

			if(!$result || mysqli_num_rows($result)==0)
				{
?>
					<div class="text-danger"> No Results Found !</div>
					<a href="search.php" class="btn btn-default margin-top-sm">Search Again</a>
					<?php
				}
			else
				{
					?><table class="table table-striped">
						<tr>
							<th> First Name</th>
							<th> Last Name</th>
							<th> Mobile Number</th>
						<tr>
					<?php
						while($data=mysqli_fetch_Array($result))
							{
								echo "<tr>";
								echo "<td> $data[0] </td> ";
								echo "<td> $data[1] </td> ";
								echo "<td> $data[2] </td> ";
								//echo "<td> <form  method='post' action='update.php'> <button class='btn btn-default' name='btn' type='submit' value='".$data[2]."'>&nbsp;<span class='glyphicon glyphicon-pencil'></span>&nbsp;</button> </form></td>";
								echo "</tr>";
							}
					?></table><?php }mysqli_close($con);?>