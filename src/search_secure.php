<?php
include 'db.php';


if (isset($_GET['q'])) {
    $q = "%" . $_GET['q'] . "%";

    //secure prepared statement 
    $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE ?");
    $stmt->bind_param("s", $q);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>
<h2>Search Product(Secure)</h2>
<form method="GET">
    <input type="text" name="q" placeholder="Search....">
    <button type="submit">Search</button>
</form>

<?php
if (isset($result)) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><b>" . htmlspecialchars($row['name']) . "</b> - ₹" . htmlspecialchars($row['price']) . "</p>";
        echo "<p>" . htmlspecialchars($row['description']) . "</p>";
    }
} ?>