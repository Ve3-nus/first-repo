<?php
// projectInsert.php
require_once "../config/dbConnect.php";

if (isset($_POST["submit"])) {
    $projectname = mysqli_real_escape_string($dbConn, $_POST["projectname"]);
    $description = mysqli_real_escape_string($dbConn, $_POST["description"]);
    $started = mysqli_real_escape_string($dbConn, $_POST["started"]);
    $completed = mysqli_real_escape_string($dbConn, $_POST["completed"]);

    $insertProject = "
    INSERT INTO projects (projectname, description, started, completed) 
    VALUES ('$projectname', '$description', '$started', '$completed')";

    if ($dbConn->query($insertProject) === TRUE) {
        echo "New project record created successfully";
        header("Location: ../services.php"); // Redirect to a different page
    } else {
        die("Failed to insert the new project record: " . $dbConn->error);
    }
}
?>