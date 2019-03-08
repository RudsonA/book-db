
<!-- connecting to bookDB -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookdb";

try {
    // global $conn; 
    $conn = new PDO("mysql:host=$servername;dbname=bookdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>