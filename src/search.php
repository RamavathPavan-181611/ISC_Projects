<?php
include 'db.php';

if (isset($_GET['q'])) {
    $q = $_GET['q']; // vulnerable input

    // vulnerable query – SQL INJECTION POSSIBLE
    $sql = "SELECT * FROM products WHERE name LIKE '%$q%'";
    $result = mysqli_query($conn, $sql);
}
?>

<h2>Search Product (Injectable)</h2>

<form method="GET">
    <input type="text" name="q" placeholder="Search..." required>
    <button type="submit">Search</button>
</form>

<?php
if (isset($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p><b>" . $row['name'] . "</b></p>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<p>Price: ₹" . $row['price'] . "</p><hr>";
    }
}
?>