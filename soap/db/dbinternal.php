<?php
require 'config/config.php';
$link = mysql_connect(DBServer, DBServerUser, DBServerPW);
if (!$link) {
    die('Connection Error ' . mysql_error());
}
$db_internal = mysql_select_db(DBInternal, $link);
if (!$db_internal) {
    die ('Kann ' .DBInternal. ' nicht ansprechen : ' . mysql_error());
}

?>