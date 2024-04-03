<?php
	$servername = "localhost";
	$username = "root"; // Ganti dengan username MySQL Anda
	$password = ""; // Ganti dengan password MySQL Anda
	$database = "query"; // Ganti dengan nama database Anda
	$conn = new mysqli($servername, $username, $password, $database);
	// Memeriksa koneksi
	if ($conn->connect_error) {
	    die("Koneksi gagal: " . $conn->connect_error);
	}
?>