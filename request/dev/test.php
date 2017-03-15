<?php
		$dbhost = "requestdb.db.10746628.hostedresource.com";
		$dbuser = "requestdb";
		$dbname = "requestdb";
		$dbpass = "theRinse!2";
	   	$conn = mysql_connect($dbhost, $dbuser, $dbpass);

		if(! $conn )
		{
		  die('Could not connect: ' . mysql_error());
		} else {
			die ('connect!');
		}

		// $sql = 'INSERT INTO employee '.
		//   '(emp_name,emp_address, emp_salary, join_date) '.
		//   'VALUES ( "guest", "XYZ", 2000, NOW() )';
		  
		// mysql_select_db($dbname);
		// $retval = mysql_query( $sql, $conn );

		// if(! $retval )
		// {
		//   die('Could not enter data: ' . mysql_error());
		// }

		// echo "Entered data successfully\n";

		mysql_close($conn);
?>