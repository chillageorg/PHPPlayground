<?php
require 'config/config.php';
$link = mysql_connect(DBServer, DBServerUser, DBServerPW);
if (!$link) {
    die('Connection Error ' . mysql_error());
}
$db_external = mysql_select_db(DBExternal, $link);
if (!$db_external) {
    die ('Kann ' .DBExternal. ' nicht ansprechen : ' . mysql_error());
}

?>