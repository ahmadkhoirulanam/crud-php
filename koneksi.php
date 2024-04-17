<?php
	$servername = "localhost";
	$username = "root"; // Ganti dengan username MySQL Anda
	$password = ""; // Ganti dengan password MySQL Anda
	$database = "informatika"; // Ganti dengan nama database Anda
	$conn = new mysqli($servername, $username, $password, $database);
	// Memeriksa koneksi
	if ($conn->connect_error) {
	    die("Koneksi gagal: " . $conn->connect_error);
	}

	function baseurl($link=''){
        $baseurl="http://localhost/crud/";
        
        if(!empty($link)){
            $url=$baseurl.$link;
        }else{
            $url=$baseurl;
        }
        return $url;
    }
    function redirectto($url="",$second=0){
        $redirecto = '<meta http-equiv="refresh" content="'.$second.';url='.baseurl($url).'">';
        echo $redirecto;die;
    }
?>