<?php
include_once 'config.ini';


// Verbindung aufbauen, auswählen einer Datenbank
$link = mysql_connect(DBServer, DBServerUser, DBServerPW)
or die("Keine Verbindung moeglich: " . mysql_error());
echo "Verbindung zum Datenbankserver erfolgreich";
mysql_select_db(DBInternal) or die("Auswahl der Datenbank fehlgeschlagen");

// Ausführen einer SQL-Anfrage
$query = "SELECT * FROM test";
$result = mysql_query($query) or die("Anfrage fehlgeschlagen: " . mysql_error());

// Ausgabe der Ergebnisse in HTML
echo "<table>\n";
$jSet = array();
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo "\t<tr>\n";
	foreach ($line as $col_value) {
		echo "\t\t<td>$col_value</td>\n";
	}
	echo "\t</tr>\n";
	$jSet[] = $line;
}
echo "</table>\n";

$jsonResult = json_encode($jSet);

print $jsonResult;
// Freigeben des Resultsets
mysql_free_result($result);

// Schließen der Verbinung
mysql_close($link);
?>