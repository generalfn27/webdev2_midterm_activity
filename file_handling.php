<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style_ni_felix.css">
    <title>Midterm Lessons - Form Handling</title>
</head>
<body>
<div class="content">
    <h1>Form Handling Example</h1>
    <h1>User Registration Form Using <b>POST</b></h1>
    <form action="form_handling_process_post.php" method="POST">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" placeholder="Enter your name" required><br><br>
        <hr>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname" placeholder="Enter your last name" required><br><br>
        <hr>
        <label for="mname">Middle name:</label>
        <input type="text" id="mname" name="mname" placeholder="Enter your middle name" required><br><br>
        <hr>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday" required><br><br>
        <label for="course">Course:</label>
        <select name="course" id="course" required>
            <option value="" disabled selected>Select a course</option>
            <option value="bsit">BSIT</option>
            <option value="bscs">BSCS</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </form>
    <br>
    <br>
    <br>
    <br>
    <h1>User Registration Form Using <b>GET</b></h1>
    <form action="form_handling_process_get.php" method="GET">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" placeholder="Enter your name" required><br><br>
        <hr>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname" placeholder="Enter your last name" required><br><br>
        <hr>
        <label for="mname">Middle name:</label>
        <input type="text" id="mname" name="mname" placeholder="Enter your middle name" required><br><br>
        <hr>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday" required><br><br>
        <label for="course">Course:</label>
        <select name="course" id="course" required>
            <option value="" disabled selected>Select a course</option>
            <option value="bsit">BSIT</option>
            <option value="bscs">BSCS</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
    </form>

    <br>
    <a href="index.php">Back to Main Page</a>
</div>
<footer>
    <p>&copy;  Midterm Lessons and Activities. Nario, Felix II F. / BSIT 2-Y1-5. </a></p>
</footer>

</body>
</html>