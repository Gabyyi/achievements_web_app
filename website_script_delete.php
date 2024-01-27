<?php
$servername="localhost";
$username="user";
$password="password";
$databasename="database";
$database_connection=mysqli_connect($servername , $username , $password , $databasename);

if (!$database_connection) {
	die ("Failed connection to database: $databasename  ---  " . mysqli_connect_error() );
}
echo "Successfully connected to database: $databasename";
?>

<html>
	<head>
	</head>
	<body>
	<br><br>This is the PHP script that delete data and then reads the database<br><br>
<?php
	$database_query="DELETE FROM database.achievements WHERE achievements='$_POST[achievement]'";
	mysqli_query($database_connection, $database_query) or die("Query error to database: $databasename");
	#shell_exec('/var/www/html/1.sh');
    
    	$old_path = getcwd();
    	chdir('/var/www/html/');
    	$output = shell_exec('./1.sh');
    	chdir($old_path);
    	echo $output;

	$database_query="SELECT * FROM database.achievements";
	mysqli_query($database_connection, $database_query) or die("Query error to database: $databasename");

	$query_result=mysqli_query($database_connection, $database_query);
	while ($line=mysqli_fetch_array($query_result)) {
		echo $line['id'] . ' - achievement ' . $line['achievements'] . ' - completion date: ' . $line['completion_date'] . ' - status '. $line['status'] . '<br />';
	}
	#mysqli_close($database_connection);
?>
	</body>
</html>
