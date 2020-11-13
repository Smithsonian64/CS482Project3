<?php
session_start();
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//include "login_process.php";

define('DB_SERVER', $_SESSION["host"]);
define('DB_USERNAME', $_SESSION["username"]);
define('DB_PASSWORD', $_SESSION["password"]);
define('DB_NAME', $_SESSION["database"]);
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>