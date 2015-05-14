<html>
	<head>
		<script src="validate.js"></script>
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
		<title>Register</title>
	</head>
	<body>
	
		<div id="title">
		<h1>Tennis Court Locator</h1>
		</div>
		
		<!--Navigation section-->
		<div id="dropdownbox">
		<h3>Navigation</h3>
		<select onchange="window.location.assign(this.value,'','');">
			<option value=""></option>
			<option value="registration.html">User Registration</option>
			<option value="searchform.html">Search</option>
			<option value="aboutus.html">About Us</option>
			<option value="login.html">Login</option>
		</select>
		</div>

		<div id="mainbody">
		<p>
		<h2>User Registration</h2>
		<form name="newaccount" onsubmit="return submitfunc()" method ="post">
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
		<div id="footer">
		<p>Copyright of blah blah blah, contact details here</p>
		</div>
	</body>
</html>