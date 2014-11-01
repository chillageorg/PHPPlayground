<?php
define("DBServer", "localhost");
define("DBServerPW", "test");
define("DBServerUser", "root");
define("DBInternal", "playground");

$mysqli = new mysqli(DBServer, DBServerUser, DBServerPW,DBInternal);
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