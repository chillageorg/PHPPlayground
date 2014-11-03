<?php

include_once 'config.ini';

$mysqli = new mysqli(DBServeri, DBServerUser, DBServerPW,DBInternal);
if ($mysqli->connect_error) {
	die('Connect Error (' . $mysqli->connect_errno . ') '
	. $mysqli->connect_error);
}


$query = "SELECT * FROM test";
$result = $mysqli->query($query);


while($row = $result->fetch_assoc()) {
	echo $row["name"] . " " .$row["vorname"] . "<br>";
}
$result->close();
$mysqli->close();