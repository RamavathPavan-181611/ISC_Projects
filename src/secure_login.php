<?php include  'db.php' ?>

<!DOCTYPE html>
<html>

<head>
    <title>Secure Login</title>
</head>

<body>
    <h2>Secure Login(Prepared Statement)</h2>

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

        //secure query
        $stmt = $conn->prepare("SELECT * FROM users WHERE username =? AND password =?");
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<p style='color:green;'>Login Successful (Secure)!</p>";
            echo "<a href='dashboard_secure.php'>Go to Dashboard</a>";
        } else {
            echo "<p style='color:red;'>Invalid credentials!</p>";
        }
    }
    ?>
</body>

</html>