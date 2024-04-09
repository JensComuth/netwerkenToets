<?php

$dbhost = 'localhost:3306';
$dbuser = 'net24jcomuth_net24jcomuthToets';
$dbpass = 'gtye{;5m*nxo'; 
$dbname = 'net24jcomuth_netwerkenToetsDB';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>