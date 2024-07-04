<?php

//Import dtbse
require_once "../config/dbConnect.php";

if (isset($_POST["signup"])) {
    $fullname = mysqli_real_escape_string($dbConn, $_POST["fullname"]);
    $username = mysqli_real_escape_string($dbConn, $_POST["username"]);
    $email = mysqli_real_escape_string($dbConn, $_POST["email"]);
    $password = mysqli_real_escape_string($dbConn, $_POST["password"]);
    $created = mysqli_real_escape_string($dbConn, $_POST["created"]);
    $updated = mysqli_real_escape_string($dbConn, $_POST["updated"]);
 // Encrypting the password -->

    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    
  //inserting data  to table
  $user_insert = "INSERT INTO users (fullname, username, email, password, created, updated) VALUES ('$fullname', '$username', '$email', '$hash_password', '$created', '$updated')";

  //executing the sql query
  if ($dbConn->query($user_insert) === TRUE) {
    echo "New record created successfully";
    header("Location: ./sign-in.php");
} else {
    die("Failed to insert the new record: " .  $dbConn->error);
}
}
?>