<?php

//deklarasi alamat server
$server = "localhost";
//deklarasi username
$user = "root";
//deklarasi nama database
$namadb = "tiumy";
//deklarasi password
$password = "";
//membuat koneksi ke dalam database
$conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi gagal");
//membuat yang berisi query untuk menampilkan data
$result = mysqli_query($conn, "SELECT * FROM teman");
//membuat variable json yang berjenis data array
$json = array();

//membaca isi data dari database
while ($row = mysqli_fetch_assoc($result)){
	$json[] = $row;
}

echo json_encode($json);
mysqli_close($conn);
?>