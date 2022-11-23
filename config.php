<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'barrigaCheia';
 
try {

    /* Attempt to connect to MySQL database */
    $conn = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
    
} catch (mysqli_sql_exception $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>