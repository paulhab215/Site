<?php # Database Access - establishes connection wile setting encoding

// Opens a connection to a MySQL server
$connection=mysql_connect ('localhost', 'root', 'Pandaria02.');
if (!$connection) {
die('Not connected : ' . mysql_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db('paulsite', $connection);
if (!$db_selected) {
die ('Can\'t use db : ' . mysql_error());
}

// Set encoding.
mysqli_set_charset($dbc, 'utf8');