<?php
include 'koneksi.php';
// Mendapatkan data dari form edit
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// Update data mahasiswa
$sql = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', tempat_lahir='$tempat_lahir', jenis_kelamin='$jenis_kelamin' WHERE nim='$nim'";
if ($conn->query($sql) === TRUE) {
    echo "Data mahasiswa berhasil diupdate.";
} else {
    echo "Error updating record: " . $conn->error;
}

?>
