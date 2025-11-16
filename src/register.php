<?php
include 'db.php';

if (isset($_POST['register'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    //hash password before storing
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    //insert user
    $stmt = $conn->prepare("INSERT INTO users(username, password) VALUES(?, ?)");
    $stmt->bind_param("ss", $user, $hashedPassword);

    if ($stmt->execute()) {
        echo "<p style='color:green;'>Regression Successful! You can login now.</p>";
    } else {
        echo "<p style='color:red;'>Error Username already exists!</p>";
    }
}

?>

<form method="POST">
    <label for="user">Username:</label>
    <input type="text" id="user" name="username" required><br><br>

    <label for="user">Password:</label>
    <input type="text" id="user" name="password" required><br><br>

    <button type="submit" name="register">Register</button>

</form>