<html>
	<head>
		<link rel="stylesheet" type="text/css" media="only screen and (max-width: 320px)" href="mediacss.css">
		<link rel="stylesheet" type="text/css" href="assignmentcss.css">
		<!-- Once we get PHP setup, we'll need to get this individualised for each entry-->
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@TennisCourtLocator" />
		<meta name="twitter:title" content="Tennis Court Locations" />
		<meta name="twitter:description" content="Click to view this Tennis Court!" />
		<meta name="twitter:image" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg" />
		<meta name="twitter:url" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg" />
		<meta property="og:title" content="Tennis Court Locations"/>
		<meta property="og:image" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg"/>
		<meta property="og:url" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg"/>
		<meta property="og:description" content="Click to view this Tennis Court!"/>
		<meta property="og:type" content="article"/>

		<meta name="viewport" content="width=device-width">
		<title>Tennis Court Locator</title>
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

		<div id="mainbody" itemscope itemtype="http://schema.org/Place">
		<?php

$id=$_GET["id"];
$user="root";
$pass="root";
$db=new PDO('mysql:host=localhost;dbname=assignment', $user, $pass);
$stmt=$db->query('SELECT * FROM tennis_courts WHERE Id='.$id);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$ID=$row['ID'];
			$Venue=$row['Venue'];
			$Coordinates=$row['Coordinates'];
			$Suburb=$row['Suburb'];
			$Address=$row['Address'];
			$NumbCourts=$row['Number of tennis courts'];
			$BookingDetails=$row['Booking details'];
			echo "<div itemprop=\"name\"><h3>".$Venue."</h3>\n</div>\n";
			echo "<div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\"><h4>Location: </h4>" . $Address . "</div>\n";
			echo "<meta itemprop=\"address\" content=\"".$Address."\">";
			echo "<meta itemprop=\"streetAddress\" content=\"".$Address."\">";
			echo "<meta itemprop=\"addressLocality\" content=\"".$Suburb."\">";
			echo "<meta itemprop=\"addressRegion\" content=\"Queensland\">";
			echo "<meta itemprop=\"geo\" content=\"".$Coordinates."\">";
			echo "<p><h4>Number of Courts: </h4>" . $NumbCourts . "</p>\n";
			echo "<p><h4>Booking Details: </h4>".$BookingDetails."</p>\n";
		}
		?>
		</div>
		<div id="mainbody">
			<h2>Reviews</h2>
			<table>
				<tr>
					<td>Reviewer</td>
					<td>Rating</td>
					<td>Review</td>
				</tr>
			<?php
			require("connect.php");
			$stmt1=$db->query('SELECT * FROM reviews WHERE Court = \''.$Venue.'\'');
			while($displayrow = $stmt1->fetch(PDO::FETCH_ASSOC))
			{
				$user=$displayrow['User'];
				$rating=$displayrow['Rating'];
				$review=$displayrow['Review'];
				echo "<tr>\n";
				echo "<td>".$user."</td>\n";
				echo "<td>".$rating." out of 10</td>\n";
				echo "<td>".$review."</td>\n";
				echo "</tr>";
			}
			?>

			<form id="review" method="post">
				Review:
				<input type="text" name="review"><br>
				Rating:
				<select name="rating">
					<option name="1">1</option>
					<option name="2">2</option>
					<option name="3">3</option>
					<option name="4">4</option>
					<option name="5">5</option>
					<option name="6">6</option>
					<option name="7">7</option>
					<option name="8">8</option>
					<option name="9">9</option>
					<option name="10">10</option>
				</select><br>
				<input type="submit" name="submit">
			</form>


		</div>
		<?php include "footer.php";	?>
	</body>
</html>
