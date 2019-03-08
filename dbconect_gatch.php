<?php 
$dsn = 'mysql:dbname=yuskey_dev;host=mysql7054.xserver.jp';
$user = 'yuskey_origin';
$password = 'M1yatash1tash1';
$dbh = new PDO($dsn,$user,$password);
$dbh -> query('SET NAMES utf8');
?>
