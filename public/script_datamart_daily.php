<?php
// Koneksi ke database
$conn = new mysqli('127.0.0.1', 'greenhouse', 'niFurVVaTtmW53egIGmu', 'greenhousedb');

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Insert data dari historical_data ke datamart_daily setiap 2 Jam
$sql_insert_datamart_daily = "
    INSERT INTO datamart_daily (created_at, node, n, p, k, temperature, ph, humidity)
    SELECT created_at, node, n, p, k, temperature, ph, humidity
    FROM historical_data
    WHERE created_at >= NOW() - INTERVAL '2 hour';
";
if ($conn->query($sql_insert_datamart_daily) === TRUE) {
    file_put_contents(__DIR__ . '/cron_log_datamart_daily.txt', date('Y-m-d H:i:s') . " - Data berhasil dimasukkan ke datamart_daily\n", FILE_APPEND);
} else {
    file_put_contents(__DIR__ . '/cron_log_datamart_daily.txt', date('Y-m-d H:i:s') . " - Error: " . $conn->error . "\n", FILE_APPEND);
}

$conn->close();
?>
