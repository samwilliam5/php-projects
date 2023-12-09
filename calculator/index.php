<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator App</title>
    <link rel="stylesheet" href="./dist/style.css">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="number" name="n01" id="n01" placeholder="Enter a number one">
        <select name="operator" id="operator">
            <option value="add">Addition</option>
            <option value="sub">Subraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="n02" id="n02" placeholder="Enter a number two">
        <button>Calculate</button>
    </form>

</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // sanitize the input values 
    $n01 = filter_input(INPUT_POST, 'n01', FILTER_SANITIZE_NUMBER_FLOAT);
    $n02 = filter_input(INPUT_POST, 'n02', FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST['operator']);


    // validate the input fields
    if (empty($n01) || empty($n02) || empty($operator)) {
        echo "<p class='err-message'> Input Fields cannot be empty </p>";
    } else if (!is_numeric($n01) || !is_numeric($n02)) {
        echo "<p class='err-message'>Number Need to be numeric</p>";
    } else {
        $cals = match ($operator) {
            'add' => $n01 + $n02,
            'sub' => $n01 - $n02,
            'mul' => $n01 * $n02,
            'div' => $n01 / $n02
        };
        echo "<p class='succ-message'> Result - $cals </p>";
    }
}
