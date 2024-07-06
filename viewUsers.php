<?php
session_start();
require_once "./config/dbConnect.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<>
    <title>Adease</title>
    <!-- Navigation Links -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ADEASE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index.html">Home</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="./patners.html">Partners</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Contact-us.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./donate.html">Donate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./help.html">Help</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about.html">About</a>
              </li>
             
            </ul>
            <div class="">
                <?php
                if(isset($_SESSION['control'])) {
                } 
                ?>
                <div class="usertitle">
                    Hello <?php print $_SESSION['control']["fullname"] ?>
                </div>
                <a href="./processes/User_processes.php?signout"> Sign out</a>
                <?php
                ?>
            </div>
          </div>
        </div>
        
      </nav>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</head>
<footer>
        <p>&copy; 2024 Adease. All rights reserved.</p>
    </footer>
</html>