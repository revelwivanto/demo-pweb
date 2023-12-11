<html>
<head>
	<title>Add Data</title>
</head>
<body>
<?php

require_once("dbConnection.php");

if (isset($_POST['submit'])) {	
    $nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$isi = mysqli_real_escape_string($mysqli, $_POST['isi']);
	$kategori = mysqli_real_escape_string($mysqli, $_POST['kategori']);
		
	if (empty($nama) || empty($isi) || empty($kategori)) {
		if (empty($nama)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($isi)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($kategori)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
        $materi = mysqli_query($mysqli, "INSERT INTO siswa (`nama`, `isi`, `kategori`) VALUES ('$nama', '$isi', '$kategori')");

		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>