<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assignmentcss.css">
		<link rel="stylesheet" type="text/css" media="only screen and (max-width: 320px)" href="mediacss.css">
		<title>Login</title>
		<script src="validateLogin.js"></script>
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@TennisCourtLocator" />
		<meta name="twitter:title" content="Login" />
		<meta name="twitter:description" content="Login to set reviews on Tennis Courts" />
		<meta name="twitter:image" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg" />
		<meta name="twitter:url" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg" />
		<meta property="og:title" content="Login"/>
		<meta property="og:image" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg"/>
		<meta property="og:url" content="https://villadukuh.files.wordpress.com/2011/05/tennisview3.jpg"/>
		<meta property="og:description" content="Login to set reviews on Tennis Courts"/>
		<meta property="og:type" content="article"/>

		<meta name="viewport" content="width=device-width">
	</head>
	<body>
	
		<div id="title">
		<h1>Tennis Court Locator</h1>
		</div>
		
		<!--Navigation section-->
		<div id="dropdownbox">
		<h3>Navigation</h3>
		<?php 
		include 'navigation.inc'; ?>
		</div>	

		<div id="mainbody">
		<p>
		<h2>Login</h2>
		<form name="checkaccount" onsubmit="return submitfunclogin()" method ="post">
			Email address:<br>
			<input type="text" name="emailaddress"><br>
			Password:<br>
			<input type="password" name="password"><br>
			<input type="submit" name="Submit">
		</form>
		New user? <a href ="register.php"> REGISTER HERE! </a>
		</div>
		<?php include "footer.inc";	?>
	</body>
</html>
