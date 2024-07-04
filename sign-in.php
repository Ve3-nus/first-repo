<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="./CSS/sign.css"> <!-- Link to the CSS file -->
</head>
<body>
    <div class="container">
        <h1>Enter User Details</h1>
        <form id="signupForm" action="/submit" method="POST">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
                <span id="fullnameError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <span id="usernameError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" required>
                <span id="emailError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <span id="passwordError" class="error"></span>
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
            <a href="index.html" class="btn btn-secondary">Sign in</a>
        </form>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
