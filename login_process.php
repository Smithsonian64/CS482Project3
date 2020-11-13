
<?php
session_start();
//include "index_orig.php";

$_SESSION["host"] = $_POST["host"];
$_SESSION["database"] = $_POST["database"];
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];


/*if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}*/

//echo phpinfo();

$_SESSION["link"] = mysqli_connect($_SESSION["host"], $_SESSION["database"], $_SESSION["username"], $_SESSION["password"]);
if ($_SESSION["link"]->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
    header("Location: error.php");
    exit();
} else {
    //die("Connection failed: " . $conn->connect_error);

    header("Location: index.php");
    exit();
}
?>