<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style_ni_felix.css">
</head>
<body>
<div class="container">
    <div class="login-container">
        <?php
        // Start session to store attempt count
        session_start();

        // Automatically reset attempt counter when the page is refreshed (GET request)
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $_SESSION['attempts'] = 0;
        }

        // Set the maximum number of attempts allowed
        $maxAttempts = 3;

        // Check if the form has been submitted (POST request)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Ensure both fields are provided
            if(!empty($_POST['username']) && !empty($_POST['password'])) {

                $username = $_POST['username'];
                $password = $_POST['password'];

                // Define correct username and password for verification
                $correctUsername = 'user123';
                $correctPassword = 'password123';

                // Increment the attempt count
                $_SESSION['attempts']++;

                // Check if the provided credentials are correct
                if($username === $correctUsername && $password === $correctPassword) {
                    // Reset attempts on successful login
                    $_SESSION['attempts'] = 0;

                    echo "<p class='message'>Username and Password are correct. Redirecting...</p>";

                    // Redirect to welcome.php upon successful login
                    header('Location: welcome.php');
                    exit;
                } else {
                    echo "<p class='message'><strong>Login Error:</strong> Incorrect username or password.</p>";
                }
            } else {
                echo "<p class='message'><strong>Login Error:</strong> Both username and password must be provided.</p>";
            }
        }

        // Determine whether to disable the form
        $disableForm = ($_SESSION['attempts'] >= $maxAttempts);

        // Redirect to index.php if maximum attempts are reached
        if ($disableForm) {
            echo "<p class='message'>You have reached the maximum number of attempts. Redirecting to index.php...</p>";
            header('refresh:0;url=index.php');
            exit;
        }
        ?>

        <form method="post" class="login">
            <h1>Login</h1>
            <label for="username">Username: </label>
            <input type="text" id="username" name="username" required <?php echo $disableForm ? 'disabled' : ''; ?>>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" required <?php echo $disableForm ? 'disabled' : ''; ?>>
            <input type="submit" value="Login" <?php echo $disableForm ? 'disabled' : ''; ?>>
        </form>

        <?php
        // Display the current number of attempts
        echo "<p class='attempts'><strong>Attempts:</strong> {$_SESSION['attempts']}</p>";
        ?>
    </div>
</div>
<footer>
    <p>&copy;  Midterm Lessons and Activities. Nario, Felix II F. / BSIT 2-Y1-5. </a></p>
</footer>
</body>
</html>