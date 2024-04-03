<?php
include 'koneksi.php';
// Mendapatkan NIM mahasiswa yang akan dihapus dari URL
$nim = $_GET['nim'];

// Hapus data mahasiswa
$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
if ($conn->query($sql) === TRUE) {
    echo "Data mahasiswa berhasil dihapus.";
} else {
    echo "Error deleting record: " . $conn->error;
}
header('Location: index.php');
?>
