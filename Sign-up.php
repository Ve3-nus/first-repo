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
        <form id="userForm" action="/processes/User_processes.php" method="POST">
            <div class="form-group">
                <label for="userId">User ID</label>
                <input type="text" id="userId" name="userId" required>
                <span id="userIdError" class="error"></span>
            </div>
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
            <div class="form-group">
                <label for="created">Created Date</label>
                <input type="date" id="created" name="created" required>
                <span id="createdError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="updated">Updated Date</label>
                <input type="date" id="updated" name="updated" required>
                <span id="updatedError" class="error"></span>
            </div>
            <input type="submit" name = "signup" class="btn btn-primary">Sign up</>
            <a href="sign-in.html" class="btn btn-secondary">Already have an account? Sign in</a>
        </>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
