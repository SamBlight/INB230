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
		<h2>Search</h2>
		<p>
		<form action="searchform.php?go" id="searchform" method="post">
			Search for:<br>
			<select name="criteria">
				<option value="Suburb">Suburb</option>
				<option value="Name">Name</option>
			</select>
			<input type="text" name="search">
			<input type="submit" name="Submit">
		</form>
		
		<?php
		include 'search_go.php';?>
		</div>
		<div id="footer">
		<p>Copyright of blah blah blah, contact details here</p>
		</div>
	</body>
</html>
