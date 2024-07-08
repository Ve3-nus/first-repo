<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Entry</title>
    <link rel="stylesheet" href="./CSS/sign.css"> <!-- Link to the CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ADEASE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="./patners.php">Partners</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Contact-us.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./donate.php">Donate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./help.php">Help</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about.php">About</a>
                <li class="nav-item">
                <a class="nav-link" href="./services.php">Projects</a>
              </li>
              </li>
             
            </ul>
          </div>
        </div>
        
      </nav>
    <div class="container">
        <h1>Enter Project Details</h1>
        <form id="projectForm" action="./processes/project_processes.php" method="POST">
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
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>