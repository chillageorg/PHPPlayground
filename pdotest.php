<?php
include_once 'config.ini';
try {
	$dbh = new PDO('mysql:host=:/Applications/MAMP/tmp/mysql/mysql.sock;dbname=playground', 'root', 'test', array( PDO::ATTR_PERSISTENT => false));
	echo "Connected\n";
} catch (Exception $e) {
	die("Unable to connect: " . $e->getMessage());
}

try {
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$dbh->beginTransaction();
	$$stmt = $dbh->prepare("SELECT * FROM test where name = ?");
	if ($stmt->execute(array('Rinaldi'))) {
		while ($row = $stmt->fetch()) {
			print_r($row);
		}
	}
	$dbh->commit();

} catch (Exception $e) {
	$dbh->rollBack();
	echo "Failed: " . $e->getMessage();
}
?>