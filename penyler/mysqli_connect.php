<?php # Database Access - establishes connection wile setting encoding

// Opens a connection to a MySQL server
$connection=mysqli_connect('localhost', 'root', 'secret', 'paulsite');

if (!$connection) {
	error_log("Did not connect", 3, "errors.txt");
	die('Not connected : ' . mysql_error());
}
// Set encoding.
mysqli_set_charset($dbc, 'utf8');