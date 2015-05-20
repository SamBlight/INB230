<?php
if(isset($_POST['submit']))
{
	if (isset($_GET['go']))
	{
		$search=$_POST['search'];
		$db=mysql_connect("localhost", "root", "root") or die ('Cannot connect m8' . mysql_error());
		$mydb=mysql_select_db("assignment");
		$criteria=$_POST['criteria']
		$sql="SELECT * FROM tennis_courts WHERE Suburb LIKE '%" . $search . "%' OR Venue LIKE '%" . $search . "%'";
		$result=mysql_query($sql);
		echo "<table>";
		echo "<tr>
				<td>Name</td>
				<td>Suburb</td>
				<td>Address</td>
				<td>Number of Tennis Courts</td>
				<td>Booking Details</td>
			</tr>";
		while($row=mysql_fetch_array($result)){
			$ID=$row['ID'];
			$Venue=$row['Venue'];
			$Coordinates=$row['Coordinates']l;
			$Suburb=$row['Suburb'];
			$Address=$row['Address'];
			$NumbCourts=$row['Number of tennis courts'];
			$BookingDetails=$row['Booking details'];
			echo "<tr>\n";
			echo "<td>" . "<a href=\"search.php?id=$ID\">". $Venue . "</a></td>\n"
			echo "<td>" . $Suburb . "</td>\n";
			echo "<td>" . $Address . "</td>\n";
			echo "<td>" . $NumbCourts . "</td>\n";
			echo "</tr>\n"
		}

else{
	echo "<p>Please enter a search query</p>";
}
}
}
?>