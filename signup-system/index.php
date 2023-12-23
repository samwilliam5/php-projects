<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./dist/css/style.css">
</head>
<body>
    <h1>Login</h1>
     <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" id="username" placeholder="Enter username">
        <input type="password" name="password" id="password" placeholder="Enter password">
        <button>Login</button>
     </form>
     <h1>Signup</h1>
     <form action="includes/signup.inc.php" method="post">
     <input type="text" name="username" id="username" placeholder="Enter username">
     <input type="password" name="password" id="password" placeholder="Enter password">
     <input type="email" name="email" id="email" placeholder="Enter email">
     <button>Signup</button>
     </form>
</body>
</html>


<?php

require_once './includes/session.inc.php';
require_once './includes/signup_view.inc.php';

echo error_message();

?>






