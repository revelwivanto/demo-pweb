<?php
include 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $mata_pelajaran = $_POST["mata_pelajaran"];
    $kelas = $_POST["kelas"];
   
    
    if (isset($_POST["id"])) {
        $id = $_POST["id"];
       $query = "UPDATE tutor SET nama='$nama', mata_pelajaran='$mata_pelajaran', kelas='$kelas' WHERE id=$id";

    } else {
        $query = "INSERT INTO tutor (nama, mata_pelajaran, kelas) VALUES ('$nama', '$mata_pelajaran', '$kelas')";
    }

    if ($mysqli->query($query) === TRUE) {
        header("Location: tutor.php"); // Redirect kembali ke halaman manajemen tutor setelah penyimpanan berhasil
        exit();
    }
}

$koneksi->close();
?>
