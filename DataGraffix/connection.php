<?php 

// Definition of variables for the database connection
$username = "root";
$password = "";
$database = "internetavg";

// Attempt to create a PDO connection to the database
try {
  $pdo = new PDO("mysql:host=localhost;database=$database", $username, $password);
  // Setting error handling mode for PDO
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  // If there is an error during connection, print error message
  die("ERROR: Could not connect. " . $e->getMessage());
}

?>

