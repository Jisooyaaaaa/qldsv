<?php 
// DB credentials.
define('DB_HOST','sql302.byethost7.com');
define('DB_USER','b7_36095224');
define('DB_PASS','noboom909');
define('DB_NAME','b7_36095224_srms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>