<?php
$servername="localhost";
$username="gabi";
$password="12345";
$databasename="website_database";
$database_connection=mysqli_connect($servername , $username , $password , $databasename);

if (!$database_connection) {
	die ("Failed connection to database: $databasename  ---  "  . mysqli_connect_error() );
}
echo "Successfully connected to database: $databasename";
?>

<html>
	<head>
	</head>
	<body>
	<br><br>This is the PHP script that add records into the database<br><br>
<?php
	$database_query="INSERT INTO website_database.achievementsid (id,achievements,completion_date,status) VALUES ( NULL , '$_POST[achievement]' , '$_POST[date]' , '$_POST[status]' ) ;" ;
	mysqli_query($database_connection, $database_query) or die("Query error to database: $databasename");
?>
<br>
<?php
	$database_query="SELECT * FROM website_database.achievementsid";
	mysqli_query($database_connection, $database_query) or die("Query error to database: $databasename");

	$query_result=mysqli_query($database_connection, $database_query);
	while ($line=mysqli_fetch_array($query_result)) {
		echo $line['id'] . ' - achievement ' . $line['achievements'] . ' - completion date: ' . $line['completion_date'] . ' - status '. $line['status'] . '<br />';
	}
	mysqli_close($database_connection);
?>
	</body>
</html>
