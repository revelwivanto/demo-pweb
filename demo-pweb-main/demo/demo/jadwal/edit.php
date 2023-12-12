<?php
 require_once("../dbConnection.php");

if (isset($_POST['update'])) {
    $id_jadwal = mysqli_real_escape_string($mysqli, $_POST['id_jadwal']);
    $id_tutor = mysqli_real_escape_string($mysqli, $_POST['id_tutor']);
    $id_materi = mysqli_real_escape_string($mysqli, $_POST['id_materi']);
    $waktu = mysqli_real_escape_string($mysqli, $_POST['waktu']);
    $nama_materi = mysqli_real_escape_string($mysqli, $_POST['nama_materi']);

    if (empty($id_tutor) || empty($id_materi) || empty($waktu) || empty($nama_materi)) {
        if (empty($id_tutor)) {
            echo "<font color='red'>Tutor ID field is empty.</font><br/>";
        }

        if (empty($id_materi)) {
            echo "<font color='red'>Materi ID field is empty.</font><br/>";
        }

        if (empty($waktu)) {
            echo "<font color='red'>Waktu field is empty.</font><br/>";
        }

        if (empty($nama_materi)) {
            echo "<font color='red'>Nama Materi field is empty.</font><br/>";
        }

        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        $result = mysqli_query($mysqli, "UPDATE jadwal SET `id_tutor` = '$id_tutor', `id_materi` = '$id_materi', `waktu` = '$waktu', `nama_materi` = '$nama_materi' WHERE `id_jadwal` = $id_jadwal");

        if ($result) {
            echo "<p><font color='green'>Data updated successfully!</font></p>";
            echo "<a href='index.php'>View Result</a>";
        } else {
            echo "<p><font color='red'>Error updating data: " . mysqli_error($mysqli) . "</font></p>";
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        }
    }
}
?>
