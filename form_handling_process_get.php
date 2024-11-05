<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Data Display (GET)</title>
    <link rel="stylesheet" href="style_ni_felix.css">
</head>
<body>
<div class="content">
    <h2>Form Data (GET)</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['fname'])) {
            $fname = htmlspecialchars($_GET['fname']);
            echo "<p><strong>First Name:</strong> $fname</p>";
        }

        if (isset($_GET['lname'])) {
            $lname = htmlspecialchars($_GET['lname']);
            echo "<p><strong>Last Name:</strong> $lname</p>";
        }

        if (isset($_GET['mname'])) {
            $mname = htmlspecialchars($_GET['mname']);
            echo "<p><strong>Middle Name:</strong> $mname</p>";
        }

        if (isset($_GET['birthday'])) {
            $birthday = htmlspecialchars($_GET['birthday']);
            echo "<p><strong>Birthday:</strong> $birthday</p>";
        }

        if (isset($_GET['course'])) {
            $course = htmlspecialchars($_GET['course']);
            echo "<p><strong>Course:</strong> $course</p>";
        }
    }
    ?>
    <br>
    <form action="file_handling.php" method="get">
        <button type="submit">Return to Form Handling Example page</button>
    </form>
    <br>
    <form action="index.php" method="get">
        <button type="submit">Go Back to Index</button>
    </form>
</div>
<footer>
    <p>&copy;  Midterm Lessons and Activities. Nario, Felix II F. / BSIT 2-Y1-5. </a></p>
</footer>
</body>
</html>