<html>
<head>
	<title>Add Data</title>
</head>
<body>
<?php

require_once("dbConnection.php");

if (isset($_POST['submit'])) {	
    $nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$tingkat = mysqli_real_escape_string($mysqli, $_POST['tingkat']);
	$sekolah = mysqli_real_escape_string($mysqli, $_POST['sekolah']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
		
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
	
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
        $siswa = mysqli_query($mysqli, "INSERT INTO siswa (`nama`, `tingkat`, `sekolah`) VALUES ('$nama', '$tingkat', '$sekolah')");

		$query = mysqli_query($mysqli, "SELECT * FROM account ORDER BY id DESC LIMIT 1");
		$res = mysqli_fetch_assoc($query);
		$id_siswa = $res['id'];

		$auth = mysqli_query($mysqli, "INSERT INTO account (`ID_Siswa`, `ID_Tutor`, `ID_Admin`, `name`, `age`, `email`) VALUES ('$id_siswa', '', '', '$username', '$password')");

		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>