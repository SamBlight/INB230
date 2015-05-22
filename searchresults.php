<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assignmentcss.css">
		<title>Search Results</title>
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@TennisCourtLocator" />
		<meta name="twitter:title" content="Search Results" />
		<meta name="twitter:description" content="Click to View the Search Results" />
		<meta name="twitter:image" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg" />
		<meta name="twitter:url" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg" />
		<meta property="og:title" content="Search Results"/>
		<meta property="og:image" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg"/>
		<meta property="og:url" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg"/>
		<meta property="og:description" content="Click to View the Search Results"/>
		<meta property="og:type" content="article"/>
	</head>
	<body>
	
		<div id="title">
		<h1>Tennis Court Locator</h1>
		</div>
		
		<!--Navigation section-->
		<div id="dropdownbox">
		<h3>Navigation</h3>
				<?php 
		include 'navigation.php'; ?>
		</div>
		<div id="mainbody">
			<?php
$term=$_POST["search"];
$user="root";
$pass="root";
$db=new PDO('mysql:host=localhost;dbname=assignment', $user, $pass);
		echo "<table>\n";
		echo "<tr>
				<td><h4>Name</h4></td>
				<td><h4>Suburb</h4></td>
				<td><h4>Address</h4></td>
				<td><h4>Number of Tennis Courts</h4></td>
			</tr>\n";
$stmt = $db->query('SELECT * FROM tennis_courts WHERE Suburb LIKE \'%'.$term.'%\' OR Venue LIKE \'%' . $term . '%\'');
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$ID=$row['ID'];
			$Venue=$row['Venue'];
			$Coordinates=$row['Coordinates'];
			$Suburb=$row['Suburb'];
			$Address=$row['Address'];
			$NumbCourts=$row['Number of tennis courts'];
			$BookingDetails=$row['Booking details'];
			echo "<tr>\n";
			echo "<td>" . "<a href=\"individual.php?id=$ID\">". $Venue . "</a></td>\n";
			echo "<td>" . $Suburb . "</td>\n";
			echo "<td>" . $Address . "</td>\n";
			echo "<td>" . $NumbCourts . "</td>\n";
			echo "</tr>\n";
}
?>

		
				
		
		</div>
		<!--Cant figure out why this displays above the table-->
		<div id="footer">
		<p>Copyright of blah blah blah, contact details here</p>
		</div>
	</body>
</html>
