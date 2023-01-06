<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "locksys";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

//Added skip-grant-tables - may have skip in config mysql the database