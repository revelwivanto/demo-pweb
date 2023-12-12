<?php

require_once("../dbConnection.php");

// Fetch materi data for dropdown
$materiResult = mysqli_query($mysqli, "SELECT id, nama FROM materi");

// Handle errors if any
if (!$materiResult) {
    echo "<p><font color='red'>Error fetching materi data: " . mysqli_error($mysqli) . "</font></p>";
    exit();
}

if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
    $mata_pelajaran = mysqli_real_escape_string($mysqli, $_POST['mata_pelajaran']);
    $kelas = mysqli_real_escape_string($mysqli, $_POST['kelas']);
    $id_materi = mysqli_real_escape_string($mysqli, $_POST['id_materi']);

    if (empty($nama) || empty($mata_pelajaran) || empty($kelas) || empty($id_materi)) {
        if (empty($nama)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if (empty($mata_pelajaran)) {
            echo "<font color='red'>Subject field is empty.</font><br/>";
        }

        if (empty($kelas)) {
            echo "<font color='red'>Class field is empty.</font><br/>";
        }

        if (empty($id_materi)) {
            echo "<font color='red'>Materi field is empty.</font><br/>";
        }

        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        $insert_query = "INSERT INTO tutor (`nama`, `mata_pelajaran`, `kelas`, `id_materi`) VALUES ('$nama', '$mata_pelajaran', '$kelas', '$id_materi')";
        $result = mysqli_query($mysqli, $insert_query);

        if ($result) {
            echo "<p><font color='green'>Data added successfully!</font></p>";
            echo "<a href='index.php'>View Result</a>";
        } else {
            echo "<p><font color='red'>Error adding data: " . mysqli_error($mysqli) . "</font></p>";
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tutor</title>
</head>
<body>

<h2>Add Tutor</h2>

<form action="" method="post">
    <label for="nama">Name:</label>
    <input type="text" name="nama" required>
    <br>

    <label for="mata_pelajaran">Subject:</label>
    <input type="text" name="mata_pelajaran" required>
    <br>

    <label for="kelas">Class:</label>
    <input type="text" name="kelas" required>
    <br>

    <label for="id_materi">Select Materi:</label>
    <select name="id_materi" required>
        <?php
        while ($materiRow = mysqli_fetch_assoc($materiResult)) {
            echo "<option value='" . $materiRow['id'] . "'>" . $materiRow['nama'] . "</option>";
        }
        ?>
    </select>
    <br>

    <input type="submit" name="submit" value="Add Tutor">
</form>

<a href="index.php">View Result</a>

</body>
</html>
