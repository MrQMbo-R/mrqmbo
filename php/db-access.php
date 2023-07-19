<?php


function connect_to_database() {
  // Create a new PDO connection
  $conn = new PDO("mysql:host=localhost;dbname=mrqdb", "root", "");

  // Set the error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Return the connection
  return $conn;
}

function insert_comment($conn, $username, $comment, $approved) {
    // Create a prepared statement.
    $stmt = $conn->prepare("INSERT INTO comments (username, comment, approved) VALUES (?, ?, ?)");
  
    // Bind the parameters.
    $stmt->bind_param("sss", $username, $comment, $approved);
  
    // Execute the statement.
    $stmt->execute();
  
    // Close the statement.
    $stmt->close();
  }



?>