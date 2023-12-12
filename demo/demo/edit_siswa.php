<?php
include 'dbConnection.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query_siswa = "SELECT * FROM siswa WHERE id = $id";
    $result_siswa = $mysqli->query($query_siswa);

    if ($result_siswa->num_rows > 0) {
        $row_siswa = $result_siswa->fetch_assoc();
        $nama = $row_siswa["nama"];
        $usia = $row_siswa["usia"];
        $alamat = $row_siswa["alamat"];
        $phone = $row_siswa["phone"];
    } else {
        echo "Siswa tidak ditemukan.";
        exit();
    }
} else {
    echo "ID Siswa tidak diberikan.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa - ACC Bimbingan Belajar</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        header {
            background-color: #007bff;
            padding: 10px;
            color: #fff;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            background-color: #343a40;
            overflow: hidden;
            text-align: center; /* Center the menu */
        }

        nav li {
            display: inline-block; /* Display the list items horizontally */
        }

        nav a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        nav a#logout {
            background-color: #dc3545; /* Red background color */
            color: white;
        }
        
        section {
            padding: 20px;
            margin: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-top: 20px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Edit Siswa - ACC Bimbingan Belajar</h1>
    </header>

    <nav>
        <ul>
            <li><a href="tutor.php">Tutor</a></li>
            <li><a href="materi.php">Materi</a></li>
            <li><a href="jadwal.php">Kurikulum</a></li>
            <li><a href="mainpage_admin.php">Siswa</a></li>
            <li><a href="dashboard.php">Report</a></li>
        </ul>
    </nav>

    <section id="edit-siswa-section">
        <div class="container">
            <h2>Edit Siswa</h2>
            <form action="simpan_siswa.php" method="post">
                <input type="hidden" name="siswa_id" value="<?php echo $siswa_id; ?>">

                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                </div>

                <div class="form-group">
                    <label for="usia">Usia:</label>
                    <input type="number" class="form-control" id="usia" name="usia" value="<?php echo $usia; ?>" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </section>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
