<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Entry</title>
    <link rel="stylesheet" href="./CSS/sign.css"> <!-- Link to the CSS file -->
</head>
<body>
    <div class="container">
        <h1>Enter Project Details</h1>
        <form id="projectForm" action="project_processes.php" method="POST">
            <div class="form-group">
                <label for="projectname">Project Name</label>
                <input type="text" id="projectname" name="projectname" required>
                <span id="projectnameError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required></textarea>
                <span id="descriptionError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="started">Start Date</label>
                <input type="date" id="started" name="started" required>
                <span id="startedError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="completed">Completion Date</label>
                <input type="date" id="completed" name="completed" required>
                <span id="completedError" class="error"></span>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
