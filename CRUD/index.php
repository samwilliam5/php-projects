<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/style.css">
</head>

<body>
    <div class="containers">
        <form action="search.php" method="post">
            <label for="search"></label>
            <input type="text" name="search" id="search" placeholder="Search for user Comments">
            <button type="search">Search</button>
        </form>
    </div>
    <div class="searched">
        <?php
        session_start();
        foreach ($_SESSION['result'] as $key => $value) {
            echo $value['user_name'] . '<br>';
            echo $value['messege_text'] . '<br>';
            echo $value['created_at'];
        }
        ?>
    </div>
    <div class="container">
        <form action="include/form.inc.php" method="post">
            <h1>Sign Account</h1>
            <input type="text" name="username" id="username" placeholder="Enter a username">
            <input type="email" name="email" id="email" placeholder="Enter a email">
            <input type="password" name="password" id="password" placeholder="Enter a password">
            <button>Sign In</button>
        </form>
    </div>
    <div class="container-1">
        <form action="include/accountChange.inc.php" method="post">
            <h1>Change Account</h1>
            <input type="text" name="username" id="username" placeholder="Enter a username">
            <input type="password" name="password" id="password" placeholder="Enter a password">
            <input type="email" name="email" id="email" placeholder="Enter a email">
            <button>Change</button>
        </form>
    </div>
    <div class="container-2">
        <form action="include/accountDelete.inc.php" method="post">
            <h1>Delete Account</h1>
            <input type="text" name="username" id="username" placeholder="Enter a username">
            <input type="password" name="password" id="password" placeholder="Enter a password">
            <button>Delete</button>
        </form>
    </div>

</body>

</html>