<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>

<?php
require_once("../dbConnection.php");

// Fetch tutor and materi data for dropdowns
$tutorResult = mysqli_query($mysqli, "SELECT id, nama FROM tutor");
$materiResult = mysqli_query($mysqli, "SELECT id, nama FROM materi");

// Handle errors if any
if (!$tutorResult || !$materiResult) {
    echo "<p><font color='red'>Error fetching data: " . mysqli_error($mysqli) . "</font></p>";
    exit();
}
?>

<h2>Add Data</h2>

<form action="" method="post">

    <label for="id_tutor">Tutor:</label>
    <select name="id_tutor" required>
        <?php
        while ($tutorRow = mysqli_fetch_assoc($tutorResult)) {
            echo "<option value='" . $tutorRow['id'] . "'>" . $tutorRow['nama'] . "</option>";
        }
        ?>
    </select>
    <br>

    <label for="id_materi">Materi:</label>
    <select name="id_materi" required>
        <?php
        while ($materiRow = mysqli_fetch_assoc($materiResult)) {
            echo "<option value='" . $materiRow['id'] . "'>" . $materiRow['nama'] . "</option>";
        }
        ?>
    </select>
    <br>

    <label for="waktu">Waktu:</label>
    <input type="text" name="waktu" required>
    <br>

    <label for="nama_materi">Nama Materi:</label>
    <input type="text" name="nama_materi" required>
    <br>

    <input type="submit" name="submit" value="Add Data">
</form>
</body>
</html>
