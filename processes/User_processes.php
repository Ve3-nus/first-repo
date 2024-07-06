<?php
//start the session service 
session_start();
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
    header("Location: ../sign-in.php");
} else {
    die("Failed to insert the new record: " .  $dbConn->error);
}
}
//signin
if (isset($_POST["signin"])) {
$entered_username = mysqli_real_escape_string($dbConn, $_POST["username"]);
$entered_password = mysqli_real_escape_string($dbConn, $_POST["password"]);

//verify is the entered username matches any record
$spot_username = "SELECT * FROM usres WHERE username = '$entered_username' LIMIT 1";

//Executing the select query
$uName_result = $dbConn->query($spot_username);
//count at least one matching row
if($uName_res->num_rows > 0) {
    //create a session
    $_SESSION["control"] = $uName_res->fetch_assoc();

    //Use the  session t fetch the stored password
    $stored_password = $_SESSION["control"]["password"];
    
    //verify if the entered password matches the stored password
    if(password_verify($entered_password, $stored_password)){
        //if the 2 passwords match, redirect to certain page
        header("Location:../index.php");
        exit();
    }else{
        //otherwise destroy the control session and redirect to signin
        unset($_SESSION["control"]);
        header("Location: ../Sign-up.php");
    }

}else{
    //otherwise redirect to signin
    header("Location: ../sign-in.php");
    exit();
}
}

//signout process

if(isset($_POST["signout"])){
    //unset the session control
    unset($_SESSION["control"]);
    //redirect to signin
    header("Location:../signin.php");
    exit();
}
?>