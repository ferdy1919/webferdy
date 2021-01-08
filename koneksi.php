<?php
$host =	'localhost';
$user = 'root';
$pass = '';
$db = 'webd_ferdy';

$link = mysqli_connect($host,$user,$pass,$db);

if (!$link) {
 	die(mysqli_connect_error);
 } 
 ?>