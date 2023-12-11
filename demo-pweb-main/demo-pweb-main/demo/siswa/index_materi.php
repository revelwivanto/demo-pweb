<?php
    require_once("dbConnection.php");
?>
<html>

<body>
    <table>
    <th>
        <td>Judul</td>
        <td>Deskripsi</td>
        <td>Kategori</td>
    </th>
    <?php
    if (isset($_POST['submit'])) {
        $siswa = $id = mysqli_real_escape_string($mysqli, $_POST['id']);
        $query = mysqli_query($mysqli, "SELECT * FROM siswa_materi");
        while($res = mysqli_fetch_assoc($query)){
            if($res['id_siswa'] == $siswa){
                $id_materi = $res['id_materi'];
                $query2 = mysqli_query($mysqli, "SELECT * FROM materi WHERE 'id' = '$id_materi'"); 
                $materi = mysqli_fetch_assoc($query2);
                echo "<tr>";
                echo "<td>".$materi['nama']."</td>";
                echo "<td>".$res['isi']."</td>";
                echo "<td>".$res['kategori']."</td>";	
                echo "<tr>";
            }
        }
    }
    ?>
    </table>
</body>

</html>
