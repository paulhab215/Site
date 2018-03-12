<?php # Database Access - establishes connection wile setting encoding

// Set the database access information as constants:
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'mandarin02');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'paulsite');

$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set encoding.
mysqli_set_charset($dbc, 'utf8');