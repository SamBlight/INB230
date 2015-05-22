<html>
	<head>
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@TennisCourtLocator" />
		<meta name="twitter:title" content="Search" />
		<meta name="twitter:description" content="Search Brisbane Tennis Courts" />
		<meta name="twitter:image" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg" />
		<meta name="twitter:url" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg" />
		<meta property="og:title" content="Search"/>
		<meta property="og:image" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg"/>
		<meta property="og:url" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg"/>
		<meta property="og:description" content="Search Brisbane Tennis Courts"/>
		<meta property="og:type" content="article"/>
		<link rel="stylesheet" type="text/css" href="assignmentcss.css">
		<title>Search</title>
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
		<h2>Search by:</h2>
		<p>
		Suburb<br>
		<form action="searchresults.php?type=suburb" id="suburb" method="post">
			<select name="suburb">
				<?php
				require("connect.php");
				$suburblist=$db->query('SELECT DISTINCT Suburb FROM tennis_courts');
				while ($row = $suburblist->fetch(PDO::FETCH_ASSOC)) {
					$suburb=$row['Suburb'];
					echo "<option VALUE=\"".$suburb."\">".$suburb."</option>\n";
				}

				?>
			</select>
			<input type="submit" name="Submit">
		</form>


		<form action="searchresults.php?type=text" id="searchform" method="post">
			Name<br>
			<input type="text" name="search">
			<input type="submit" name="Submit">
		</form>
		<form action="searchresults.php?type=geo" id="geo" method="post">
			Geographical Location
		</div>
		<div id="footer">
		<p>Copyright of blah blah blah, contact details here</p>
		</div>
	</body>
</html>
