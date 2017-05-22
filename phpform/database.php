<?php
$dbname = 'database1';
$link = mysql_connect("localhost","database1","123456") or die("Couldn't make connection.");
mysql_query('SET NAMES utf8');
$db = mysql_select_db($dbname, $link) or die("Couldn't select database");
?>