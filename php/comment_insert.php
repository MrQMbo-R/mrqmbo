<?php
include "../php/db-access.php";

if (isset($_POST['submit'])) {

    // Get the form input.
    $username = $_POST['username'];
    $comment = $_POST['comment'];
   
  $msg="here";
    // Validate the form input.
    if (empty($username)) {
      echo "Please enter a username.";
    } else if (empty($comment)) {
      echo "Please enter a comment.";
    } else {
      var_dump($msg);
      // Insert the data into the database.
      insert_comment($conn, $username, $comment, 0);
  
      // Redirect to the index page.
      header("Location: index.php");
    }
  
  }
  





?>