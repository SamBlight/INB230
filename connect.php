
<!--The process used to connect to the server-->
<?php
		$user="root";
		$pass="root";
		$db=new PDO('mysql:host=localhost;dbname=assignment', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
		?>