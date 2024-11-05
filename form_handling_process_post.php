<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form Result</title>
    <link rel="stylesheet" href="style_ni_felix.css">
</head>
<body>
<div class="content">
    <h1>User Registration Form Using <b>POST</b> Result</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['fname'])) {
            $fname = $_POST['fname'];
            echo "<p><strong>First Name:</strong> " . htmlspecialchars($fname) . "</p>";
        }

        if (isset($_POST['lname'])) {
            $lname = $_POST['lname'];
            echo "<p><strong>Last Name:</strong> " . htmlspecialchars($lname) . "</p>";
        }

        if (isset($_POST['mname'])) {
            $mname = $_POST['mname'];
            echo "<p><strong>Middle Name:</strong> " . htmlspecialchars($mname) . "</p>";
        }

        if (isset($_POST['birthday'])) {
            $birth = $_POST['birthday'];
            echo "<p><strong>Birthday:</strong> " . htmlspecialchars($birth) . "</p>";
        }

        if (isset($_POST['course'])) {
            $course = $_POST['course'];
            echo "<p><strong>Course:</strong> " . htmlspecialchars($course) . "</p>";
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
D
<footer>
    <p>&copy;  Midterm Lessons and Activities. Nario, Felix II F. / BSIT 2-Y1-5. </a></p>
</footer>
</body>
</html>
