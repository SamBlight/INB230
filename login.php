<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assignmentcss.css">
		<title>Login</title>
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
		<h2>Login</h2>
		<form>
			Email address:<br>
			<input type="text" name="emailaddress"><br>
			Password:<br>
			<input type="password" name="password"><br>
			<input type="submit" name="Submit">
		</form>
		</div>
		<div id="footer">
		<p>Copyright of blah blah blah, contact details here</p>
		</div>
	</body>
</html>
