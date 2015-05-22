<html>
	<head>
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
			
		</div>
		<div id="footer">
		<p>Copyright of blah blah blah, contact details here</p>
		</div>
	</body>
</html>
