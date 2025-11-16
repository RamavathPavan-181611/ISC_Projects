<?php
$conn = mysqli_connect("localhost", "root", "pa1b181611", "sqli_demo");

if (!$conn) {
    die("Database connection failed" .  mysqli_connect_error());
}
