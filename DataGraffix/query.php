<?php 
// Attempt select query execution
try{
  $sql = "SELECT * FROM internetavg.intavgjanuary2022 LIMIT 10";   

  // Execute the query using PDO
  $result = $pdo->query($sql);

  // Check if any rows were returned by the query
  if($result->rowCount() > 0) {
    // Initialize arrays to store column values
    $colCountry = array(); // Variable to store country values
    $colIntAVG = array(); // Variable to store internet average values

    // Loop through each row returned by the query
    while($row = $result->fetch()) {
    // Store country and internet average values in respective arrays
    $colCountry[] = $row["Country"];
    $colIntAVG[] = $row["Broadband Mbps"];
    }

  // Release the result set memory
  unset($result);
  } else {
    // If no records were found, output a message
    echo "No records matching your query were found.";
  }
} catch(PDOException $e){
  //error message
  die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>

