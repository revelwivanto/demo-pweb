<?php include 'dbConnection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <nav>
        <ul>
            <li><a href="tutor.php">Tutor</a></li>
            <li><a href="materi.php">Materi</a></li>
            <li><a href="jadwal.php">Kurikulum</a></li>
            <li><a href="mainpage_admin.php">Siswa</a></li>
            <li><a href="dashboard.php">Report</a></li>
        </ul>
    </nav>

    <section>
        <h2>Daftar Siswa</h2>

        <!-- Tampilkan daftar siswa -->
        <?php
            $query_siswa = "SELECT * FROM siswa";
            $result_siswa = $mysqli->query($query_siswa);

            if ($result_siswa->num_rows > 0) {
                echo "<table class='table'>
                        <thead class='thead-dark'>
                            <tr>
                                <th>Siswa ID</th>
                                <th>Nama</th>
                                <th>Usia</th>
                                <th>Alamat</th>
                                <th>Phone</th>
                                <th>Interaksi</th>
                            </tr>
                        </thead>
                        <tbody>";

                while($row_siswa = $result_siswa->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row_siswa["id"]."</td>
                            <td>".$row_siswa["nama"]."</td>
                            <td>".$row_siswa["usia"]."</td>
                            <td>".$row_siswa["alamat"]."</td>
                            <td>".$row_siswa["phone"]."</td>
                            <td>
                                <a href='edit_siswa.php?id=".$row_siswa["id"]."' '>Edit</a>
                            </td>
                          </tr>";
                }

                echo "</tbody></table>";
            } else {
                echo "Tidak ada data siswa.";
            }

            $mysqli->close();
        ?>

        <!-- Formulir untuk menambah/mengedit siswa -->
        <h2>Tambah/Mengedit Siswa</h2>
        <form action="simpan_siswa.php" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="usia">Usia:</label>
                <input type="number" class="form-control" id="usia" name="usia" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="form-group">
                <label for="phone">phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </section>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
