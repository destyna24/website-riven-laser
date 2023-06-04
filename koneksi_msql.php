<?php
session_start();
$host = "localhost"; // Replace with your MySQL server name
$user = "root"; // Replace with your MySQL username
$pass = ""; // Replace with your MySQL password
$database = "db_rivenlaser"; // Replace with your MySQL database name

// Create a connection
$conn = mysqli_connect($host, $user, $pass, $database);

// Check if the connection was successful
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// echo "Koneksi sukses";

// Perform your database operations here
?>