<html>
<head>
	<title>Add Data</title>
</head>
<body>
<?php

require_once("../dbConnection.php");

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
        $materi = mysqli_query($mysqli, "INSERT INTO materi (`nama`, `isi`, `kategori`) VALUES ('$nama', '$isi', '$kategori')");

		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>

<form action="" method="post">
    <label for="nama">Name:</label>
    <input type="text" name="nama" required>
    <br>

    <label for="isi">Isi:</label>
    <input type="text" name="isi" required>
    <br>

    <label for="kategori">kategori:</label>
    <input type="text" name="kategori" required>
    <br>

    <input type="submit" name="submit" value="Add Data">
</form>
</body>
</html>