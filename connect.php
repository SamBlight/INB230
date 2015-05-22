<?php
		$user="root";
		$pass="root";
		$db=new PDO('mysql:host=localhost;dbname=assignment', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
		?>