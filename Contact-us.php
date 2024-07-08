<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ADEASE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./services.php">Sign-up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./patners.php">Partners</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Contact-us.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./help.php">Help</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about.php">About</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form action="">
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" placeholder="username"> <br>
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" placeholder="email"><br>
        <label for="Password"  id="password"> Password</label><br>
        <input type="password" name="password" placeholder="password"> <br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>