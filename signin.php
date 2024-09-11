<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "katalis2024";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Menangani data dari form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil dan membersihkan data dari form
    $email = $conn->real_escape_string(trim($_POST['email']));
    $password = trim($_POST['password']);

    // Mencari pengguna berdasarkan email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Login berhasil, arahkan ke dashboard.html
            header("Location: /dashboard.html");
            exit();
        } else {
            // Password salah
            echo "Password salah!";
        }
    } else {
        // Email tidak ditemukan
        echo "Email tidak ditemukan!";
    }
}

$conn->close();
?>
