<?php
error_reporting(E_ALL ^ E_DEPRECATED);
date_default_timezone_set('Africa/Lagos');
$con = mysql_connect("localhost", "wwwfpvzk_daveola", "MyDream04121989");
if (!$con)
    die('Could not connect: ' . mysql_error());
mysql_select_db("wwwfpvzk_uniiservices", $con);
?>