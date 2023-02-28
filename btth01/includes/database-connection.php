<?php
$type     = 'mysql';                 
$server   = 'localhost';           
$db       = 'btth01_cse485';
$port     = '3306';
$charset  = 'utf8mb4';
$username = 'root';        
$password = '';         

// DO NOT CHANGE ANYTHING BENEATH THIS LINE
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset"; // Create DSN
try {                                                               // Try following code
    $pdo = new PDO($dsn, $username, $password);           // Create PDO object
} catch (PDOException $e) {                                         // If exception thrown
    throw new PDOException($e->getMessage(), $e->getCode());        // Re-throw exception
}


