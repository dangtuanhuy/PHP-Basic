<?php 
$conn = 
mysql_connect("localhost","root","") or die(mysql_error());
mysql_set_charset('utf8');
mysql_select_db("flowershop") or die("mysql can not find");
?>