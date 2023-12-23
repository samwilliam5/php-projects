<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
     <link rel="stylesheet" href="./dist/style/main.css">
</head>
<body>
    <form action="./includes/login.inc.php" method="post">
        <legend>Login Form</legend>
        <input type="text" name="username" id="username" placeholder="Enter username" required>
        <input type="email" name="email" id="email" placeholder="Enter email" required>
        <input type="password" name="password" id="password" placeholder="Enter password" required>
        <button>Log In</button>
    </form>
</body>
</html>