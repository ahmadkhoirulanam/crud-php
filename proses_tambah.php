<?php
// Konfigurasi database
include 'koneksi.php';

// Mendapatkan data dari form tambah
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// Menambah data mahasiswa ke dalam database
$sql = "INSERT INTO mahasiswa (nim, nama, alamat, tempat_lahir, jenis_kelamin) VALUES ('$nim', '$nama', '$alamat', '$tempat_lahir', '$jenis_kelamin')";
if ($conn->query($sql) === TRUE) {
    echo "Data mahasiswa berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
?>
