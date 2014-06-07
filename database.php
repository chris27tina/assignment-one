<?php
// connect to the database and sore the database handle
$dlink = mysql_connect("localhost", "root", "akirachix") or die(mysql_error());
// select the database to query
$db = mysql_select_db('akirachix');
?>