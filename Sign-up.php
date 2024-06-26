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
        <h1>Enter Goods or Services Details</h1>
        <form id="goodsForm" action="/submit" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <span id="nameError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" required>
                <span id="emailError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>
                <span id="dateError" class="error"></span>
            </div>
            <a href="index.html" class="btn btn-secondary">Sign up</a>
            <a href="sign-in.html" class="btn btn-secondary">Already have an account? Sign in</a>
        </form>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
