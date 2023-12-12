<?php
 require_once("../dbConnection.php");

if (isset($_POST['update'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$tingkat = mysqli_real_escape_string($mysqli, $_POST['tingkat']);
	$sekolah = mysqli_real_escape_string($mysqli, $_POST['sekolah']);	
	
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
		$result = mysqli_query($mysqli, "UPDATE siswa SET `nama` = '$nama', `tingkat` = '$tingkat', `sekolah` = '$sekolah' WHERE `id` = $id");
		
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}