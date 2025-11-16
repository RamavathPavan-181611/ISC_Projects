<?php
include 'db.php';

$row = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //secure prepared statement
    $stmt = $conn->prepare("SELECT * FROM products WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->mysqli_fetch_assoc();
}
?>
<h2>Product Details (Secure)</h2>

<?php
if ($row) {
    echo "<p><b>" . $row['name'] . "</b></p>";
    echo "<p>" . $row['description'] . "</p>";
    echo "<p>Price:" . $row['price'] . "</p>";
} ?>