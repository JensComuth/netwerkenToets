<?php

$dbhost = 'localhost:3306';
$dbuser = 'net24jcomuthToets';
$dbpass = 'Ch!llSk!l#!1';
$dbname = 'net24jcomuth_netwerkenToetsDB';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>