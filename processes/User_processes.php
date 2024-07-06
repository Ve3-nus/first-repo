<?php
// Start the session service
session_start();

// Import database connection
require_once "../config/dbConnect.php";

// Sign up process
if (isset($_POST["signup"])) {
    $fullname = mysqli_real_escape_string($dbConn, $_POST["fullname"]);
    $username = mysqli_real_escape_string($dbConn, $_POST["username"]);
    $email = mysqli_real_escape_string($dbConn, $_POST["email"]);
    $password = mysqli_real_escape_string($dbConn, $_POST["password"]);
    $created = mysqli_real_escape_string($dbConn, $_POST["created"]);
    $updated = mysqli_real_escape_string($dbConn, $_POST["updated"]);
    
    // Encrypt the password
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert data into table
    $user_insert = "INSERT INTO users (fullname, username, email, password, created, updated) VALUES ('$fullname', '$username', '$email', '$hash_password', '$created', '$updated')";
    
    // Execute the SQL query
    if ($dbConn->query($user_insert) === TRUE) {
        echo "New record created successfully";
        header("Location: ../sign-in.php");
        exit();
    } else {
        die("Failed to insert the new record: " . $dbConn->error);
    }
}

// Sign in process
if (isset($_POST["signin"])) {
    $entered_username = mysqli_real_escape_string($dbConn, $_POST["username"]);
    $entered_password = mysqli_real_escape_string($dbConn, $_POST["password"]);
    
    // Verify if the entered username matches any record
    $spot_username = "SELECT * FROM users WHERE username = '$entered_username' LIMIT 1";
    
    // Execute the select query
    $uName_result = $dbConn->query($spot_username);
    
    // Count at least one matching row
    if ($uName_result->num_rows > 0) {
        // Create a session
        $_SESSION["control"] = $uName_result->fetch_assoc();
        
        // Use the session to fetch the stored password
        $stored_password = $_SESSION["control"]["password"];
        
        // Verify if the entered password matches the stored password
        if (password_verify($entered_password, $stored_password)) {
            // If the passwords match, redirect to a certain page
            header("Location: ../index.php");
            exit();
        } else {
            // Otherwise destroy the control session and redirect to sign-in
            unset($_SESSION["control"]);
            header("Location: ../sign-in.php");
            exit();
        }
    } else {
        // Otherwise redirect to sign-in
        header("Location: ../sign-in.php");
        exit();
    }
}

// Sign out process
if (isset($_POST["signout"])) {
    // Unset the session control
    unset($_SESSION["control"]);
    // Redirect to sign-in
    header("Location: ../sign-in.php");
    exit();
}
?>
