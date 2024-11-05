<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date Functions</title>
    <link rel="stylesheet" href="style_ni_felix.css">
</head>
<body>
<div class="content">
    <p>Date Functions</p>
    <h1>When we use date functions? </h1>
    <?php
    echo "<h2>1. Displaying Current Date and time </h2>";
    $currentDateTime = date('Y-m-d H:i:s');
    echo "Current Date and Time: " . $currentDateTime;

    // manipulating date
    echo "<h2>2. Manipulating Dates</h2>";
    $today = date('Y-m-d');
    $nextWeek = date('Y-m-d', strtotime('+1 week'));
    echo "Today: $today<br>";
    echo "Next week: $nextWeek";

    // parsing dates
    echo "<h2>3. Parsing Dates</h2>";
    $dateString = '2023-10-15';
    $parseDate = date_create_from_format('Y-m-d', $dateString);
    echo "Parsed Date: " . date_format($parseDate, 'l, F j, Y');

    // Comparing Dates
    echo "<h2>4. Comparing Dates</h2>";

    $date1 = date_create('2024-09-20');
    $date2 = date_create('2024-09-25');

    if ($date1 < $date2) {
        echo "Date 1 is earlier than Date 2";
    } elseif ($date1 > $date2) {
        echo "Date 1 is later than Date 2";
    } else {
        echo "Both dates are the same";
    }

    // Formatting Dates for Database
    echo "<h2>5. Formatting Dates for Database</h2>";

    $birthdate = '1990-05-15';
    $formattedDate = date('Y-m-d', strtotime($birthdate));

    echo "Formatted Date for Database: $formattedDate";

    // Calculating Age
    echo "<h2>6. Calculating Age</h2>";

    $birthdate = '2005-05-18';
    $currentYear = date('Y');
    $birthYear = date('Y', strtotime($birthdate));
    $age = $currentYear - $birthYear;

    echo "Age: $age";

    // Day of the Week or Month
    echo "<h2>7. Day of the Week or Month</h2>";
    $date = '2024-10-11';
    $dayOfWeek = date('l', strtotime($date));
    $month = date('F', strtotime($date));
    echo "Day of the Week: $dayOfWeek<br>";
    echo "Month: $month";
    ?>
    <br>
    <br>
    <a href="index.php">Back to Main Page</a>
</div>
<footer>
    <p>&copy;  Midterm Lessons and Activities. Nario, Felix II F. / BSIT 2-Y1-5. </a></p>
</footer>
</body>
</html>