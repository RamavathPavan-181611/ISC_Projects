<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>

<head>

    <title> SQL Injection Demo </title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h2>Vunerable Login Form</h2>

    <form method="POST">
        <label for="user">Username:</label><br>
        <input id="user" type="text" name="username"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit" name="login">Login</button>

    </form>

    <?php
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $query = "SELECT * FROM users WHERE username='$user' AND password='$pass'";

        echo "<p><b> Executed Query:</br> $query</p>";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<p style='color:green;'>Login Successful!</p>";
            echo "<a href='dashboard.php'>Go to Dashboard</a>";
        } else {
            echo "<p style='color:red;'>Invalid credentials!</p>";
        }
    }
    ?>

</body>

</html>