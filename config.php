<?php
if (!defined("server")) define("server", "localhost");
if (!defined("username")) define("username", "root");
if (!defined("password")) define("password", "");
if (!defined("dbname")) define("dbname", "expenso");

$con = mysql_connect(server, username, password) OR die(mysql_error());
mysql_select_db(dbname, $con) OR die(mysql_error());
?>
