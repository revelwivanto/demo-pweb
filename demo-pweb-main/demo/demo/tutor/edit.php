<?php
require_once("../dbConnection.php");

if (isset($_POST['update'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$mk = mysqli_real_escape_string($mysqli, $_POST['mata_pelajaran']);
	$tingkat = mysqli_real_escape_string($mysqli, $_POST['kelas']);	
	
	if (empty($nama) || empty($tingkat) || empty($sekolah)) {
		if (empty($nama)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($tingkat)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($sekolah)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		$result = mysqli_query($mysqli, "UPDATE tutor SET `nama` = '$nama', `mata_pelajaran` = '$mk', `kelas` = '$tingkat' WHERE `id` = $id");
		
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}