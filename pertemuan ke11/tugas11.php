<?php

// Connect ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tokoarab";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Buat database baru
$sql = "CREATE DATABASE tokoarab";
if ($conn->query($sql) === TRUE) {
    echo "Database berhasil dibuat";
} else {
    echo "Error creating database: " . $conn->error;
}

// Buat tabel baru
$sql = "CREATE TABLE pakaian (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    merk VARCHAR(30) NOT NULL,
    ukuran VARCHAR(50) NOT NULL,
    warna VARCHAR(15)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel berhasil dibuat";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert data ke tabel
$sql = "INSERT INTO pakaian (id, merk, ukuran, warna) VALUES ( 1,'al-husain', 'XXL','Putih' ), (2, 'rabbani','XL','coksu')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

// Update data di tabel
$sql = "UPDATE pakaian SET warna = 'marron' WHERE merk = 'al-husain'";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diupdate";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>
