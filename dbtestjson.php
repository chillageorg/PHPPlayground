<?php
// Cross Domain from Webstorm localhost
header('Access-Control-Allow-Origin: http://localhost:63342');
include_once 'config.ini';
$link = mysql_connect(DBServer, DBServerUser, DBServerPW)
or die("Keine Verbindung moeglich: " . mysql_error());

mysql_select_db(DBInternal) or die("Auswahl der Datenbank fehlgeschlagen");

$query = "SELECT * FROM test";
$result = mysql_query($query) or die("Anfrage fehlgeschlagen: " . mysql_error());

$jSet = array();
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$jSet[] = $line;
}


$jsonResult = json_encode($jSet);

echo $jsonResult;

mysql_free_result($result);
mysql_close($link);
?>