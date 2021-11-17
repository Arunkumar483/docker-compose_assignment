<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'db';
$databaseName = 'crud_db';
$databaseUsername = 'root';
$databasePassword = getenv("MYSQLPASSWORD");

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


?>
