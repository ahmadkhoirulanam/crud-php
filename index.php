<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <a class="btn btn-success mb-3" href="tambah.php">Tambah Mahasiswa</a>
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'koneksi.php';
                    // Mendapatkan data mahasiswa dari database
                    $sql = "SELECT * FROM mahasiswa";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $data_mahasiswa = $result;
                        foreach ($data_mahasiswa as $mahasiswa) {
                            echo "<tr>";
                            echo "<td>".$mahasiswa['nim']."</td>";
                            echo "<td>".$mahasiswa['nama']."</td>";
                            echo "<td>".$mahasiswa['alamat']."</td>";
                            echo "<td>".$mahasiswa['tempat_lahir']."</td>";
                            echo "<td>".$mahasiswa['jenis_kelamin']."</td>";
                            echo "<td>";
                            echo "<a class='btn btn-primary' href='edit.php?nim=".$mahasiswa['nim']."'>Edit</a> ";
                            echo "<a class='btn btn-danger' href='proses_hapus.php?nim=".$mahasiswa['nim']."'>Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                }
                    } else {
                        echo "0 results";
                    } 



                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
