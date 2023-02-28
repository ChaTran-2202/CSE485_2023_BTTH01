<?php
$type     = 'mysql';                 
$server   = 'localhost';           
$db       = 'btth01_cse485';            
<<<<<<< HEAD
$port     = '3307';
=======
$port     = '3306';
>>>>>>> fd74055147e9cb690f6b879ccb63e9c9457960e4
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


