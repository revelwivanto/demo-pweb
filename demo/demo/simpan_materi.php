<?php
// Load file koneksi.php
include "dbConnection.php";

// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];

// File upload handling
$isi = $_FILES['isi']['name'];
$tmp = $_FILES['isi']['tmp_name'];
$fotobaru = date('dmYHis') . $isi;
$path = "images/" . $fotobaru;

// Prepare an INSERT statement
$stmt = $mysqli->prepare("INSERT INTO materi(nama, isi, kategori) VALUES (?, ?, ?)");

if ($stmt) {
    // Bind parameters and execute
    $stmt->bind_param('sss', $nama, $fotobaru, $kategori);

    if (move_uploaded_file($tmp, $path)) {
        // Execute the statement
        $stmt->execute();

        // Check for successful insertion
        if ($stmt->affected_rows > 0) {
            header("location: materi.php"); // Redirect on success
            exit();
        } else {
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
        }
    } else {
        echo "Maaf, Gambar gagal untuk diupload.";
        echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
    }

    // Close the prepared statement
    $stmt->close();
} else {
    echo "Error in preparing the statement.";
}

// Close the database connection
$mysqli->close();
?>
