<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arithmetic Operation</title>
    <link rel="stylesheet" href="style_ni_felix.css">
</head>
<body>
    <div class="content">
        <h1>Use of Methods and Functions</h1>
        <h2>Arithmetic Operation</h2>

        <?php
        // Initialize result to 0
        $result = 0;
        $error = ''; // To handle division by zero

        // Check if the form was submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $operation = $_POST['operation'];

            // Perform the selected operation
            if ($operation == 'SUM') {
                $result = $number1 + $number2;
            } elseif ($operation == 'SUBTRACT') {
                $result = $number1 - $number2;
            } elseif ($operation == 'MULTIPLY') {
                $result = $number1 * $number2;
            } elseif ($operation == 'DIVIDE') {
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    $error = "Division by zero is not allowed!";
                }
            }
        }
        ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="number1">Number 1:</label>
            <input type="number" id="number1" name="number1" required value="<?php echo isset($number1) ? $number1 : ''; ?>"><br><br>

            <label for="number2">Number 2:</label>
            <input type="number" id="number2" name="number2" required value="<?php echo isset($number2) ? $number2 : ''; ?>"><br><br>

            <input type="submit" name="operation" value="SUM">
            <input type="submit" name="operation" value="SUBTRACT">
            <input type="submit" name="operation" value="MULTIPLY">
            <input type="submit" name="operation" value="DIVIDE"><br><br>

            <label for="result">Result:</label>
            <input type="text" id="result" name="result" value="<?php echo isset($error) && $error ? $error : $result; ?>" readonly><br><br>

            <a href="index.php">Go back to index</a>
        </form>
    </div>
    <footer>
        <p>&copy;  Midterm Lessons and Activities. Nario, Felix II F. / BSIT 2-Y1-5. </a></p>
    </footer>
</body>
</html>