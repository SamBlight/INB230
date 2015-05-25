<html>
	<head>
		<script src="validate.js"></script>
		<link rel="stylesheet" type="text/css" media="only screen and (max-width: 320px)" href="mediacss.css">
		<link rel="stylesheet" type="text/css" href="assignmentcss.css">
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@TennisCourtLocator" />
		<meta name="twitter:title" content="Register" />
		<meta name="twitter:description" content="Registering for an account lets you rate tennis courts and leave reviews." />
		<meta name="twitter:image" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg" />
		<meta name="twitter:url" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg" />
		<meta property="og:title" content="Register"/>
		<meta property="og:image" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg"/>
		<meta property="og:url" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg"/>
		<meta property="og:description" content="Registering for an account lets you rate tennis courts and leave reviews."/>
		<meta property="og:type" content="article"/>

		<meta name="viewport" content="width=device-width">
		<title>Register</title>
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
		<p>
		<h2>User Registration</h2>
		<form name="newaccount" action="login.php" onsubmit="return submitfunc()" method ="post">
			Username:<br>
			<input type="text" name="username"><br>
			First name:<br>
			<input type="text" name="firstname"><br>
			Last name:<br>
			<input type="text" name="lastname"><br>
			Email address:<br>
			<input type="text" name="emailaddress"><br>
			Contact Phone Number:<br>
			<input type="text" name="phonenum"><br>
			Password:<br>
			<input type="password" name="password"><br>
			Reenter Password:<br>
			<input type="password" name="reenterpassword"><p>
			<input type="submit" name="Submit">
		</form>
		</div>
		<?php include "footer.php";	?>
	</body>
</html>
