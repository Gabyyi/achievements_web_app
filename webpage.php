<?php
		$servername="localhost";
		$username="user";
		$password="password";
		$databasename="database";
		$database_connection=mysqli_connect($servername , $username , $password , $databasename);

		if (!$database_connection) {
			die ("Failed connection to database: $databasename  ---  "  . mysqli_connect_error() );
		}
		echo "Successfully connected to database: $databasename";
?>

<html lang="en">
	<head>
		<meta charset="UTF_8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Personal Accomplishments</title>
	</head>
	<body>
		<h1>Welcome to Personal Accomplishments</h1>
				
		<?php
		$database_query="SELECT * FROM database.achievements";
		mysqli_query($database_connection, $database_query) or die("Query error to database: $databasename");

		$query_result=mysqli_query($database_connection, $database_query);
		while ($line=mysqli_fetch_array($query_result)) {
			echo $line['id'] . ' - achievement ' . $line['achievements'] . ' - completion date: ' . $line['completion_date'] . ' - status '. $line['status'] . '<br />';
		}
		mysqli_close($database_connection);
		?>	

		<br><br>
	
		<a href="add.html">
			<button>Add</button>
		</a>
		<a href="edit.html">
			<button>Edit</button>
		</a>
		<a href="remove.html" target="_blank">
			<button>Remove</button>
		</a>
		<a href="website_script_display_all.php">
			<button>Display All</button>
		</a>
		<a href="website_script_display_completed.php">
			<button>Display Completed</button>
		</a>
		<a href="website_script_display_not_completed.php">
			<button>Display Not Completed</button>
		</a>
		<a href="website_script_display_failed_to_complete.php">
			<button>Display Failed To Complete</button>
		</a>
	</body>
</html>



