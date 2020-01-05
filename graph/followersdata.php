<?php
//setting header to json
header('Content-Type: application/json');

include '../inc/connection.php';

//get connection
#$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

$mysqli = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

//query to get data from the table
$query = sprintf("SELECT userid, facebook, twitter, googleplus FROM followers");
$queryUser = sprintf("SELECT id, username, email FROM accounts");
//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
