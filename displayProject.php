<?php
// displayProject.php
require_once "./config/dbConnect.php";

if (isset($_GET["id"])) {
    $projectId = mysqli_real_escape_string($dbConn, $_GET["id"]);

    $fetchProject = "SELECT * FROM projects WHERE id = '$projectId' LIMIT 1";

    $result = $dbConn->query($fetchProject);

    if ($result->num_rows > 0) {
        $project = $result->fetch_assoc();
    } else {
        die("No project found with ID: " . $projectId);
    }
} else {
    die("No project ID provided");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <link rel="stylesheet" href="./CSS/sign.css"> <!-- Link to the CSS file -->
</head>
<body>
    <div class="container">
        <h1>Project Details</h1>
        <p><strong>Project Name:</strong> <?php echo htmlspecialchars($project['projectname']); ?></p>
        <p><strong>Description:</strong> <?php echo htmlspecialchars($project['description']); ?></p>
        <p><strong>Start Date:</strong> <?php echo htmlspecialchars($project['started']); ?></p>
        <p><strong>Completion Date:</strong> <?php echo htmlspecialchars($project['completed']); ?></p>
        <a href="../services.php" class="btn btn-primary">Back to Services</a>
    </div>
</body>
</html>
