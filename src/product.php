<?php
include 'db.php';

$row = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //vulnerable query
    $sql = "SELECT * FROM products WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<h2>Product Details (Vulnerable)</h2>

<?php
if ($row) {
    echo "<p><b>" . $row['name'] . "</b></p>";
    echo "<p>" . $row['description'] . "</p>";
    echo "<p>Price: ₹" . $row['price'] . "</p>";
} else {
    echo "searching product not found";
} ?>