<?php # Script 9.2 - mysqli_connect.php

// This file contains the database access information. 
// This file also establishes a connection to MySQL, 
// selects the database, and sets the encoding.

// Set the database access information as constants:
DEFINE ('DB_USER', 'user_72afe4fb');
DEFINE ('DB_PASSWORD', 'r3ZLra$zqpB;ab');
DEFINE ('DB_HOST', '10.194.111.8');
DEFINE ('DB_NAME', 'db_72afe4fb');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($dbc, 'utf8');