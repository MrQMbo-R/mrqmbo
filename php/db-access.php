<?php


function connect_to_database() {
  // Create a new PDO connection
  $conn = new PDO("mysql:host=localhost;dbname=mrqdb", "root", "");

  // Set the error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Return the connection
  return $conn;
}

function insert_comment($username, $comment, $approved) {
  $con=connect_to_database();
    // Create a prepared statement.
    $query="INSERT INTO comments (username, comment, approved) VALUES (:username, :comment, :approved)";
    $stmt = $con->prepare($query);
  
    try{
      $stmt->execute(array(':username'=>$username,':comment'=>$comment,':approved'=>$approved));
      
  }
  catch(PDOException $e){echo 'Exception because '.$e;} 
  }
  
  function insertUser($username,$email,$password)
  {
    //Get database connection
     $con=connect_to_database();
     //Prepared statement and Query
      $query="INSERT INTO users(username,email,password) VALUES (:username,:email,:password)";
      $stmt =$con->prepare($query);
      //Execute the statement inside tryCatch
      try{
        
          $stmt->execute(array(':username'=>$username,':email'=>$email,':password'=>$password));
          
      }
      catch(PDOException $e){echo 'Exception because '.$e;} 
        
        
  }


?>