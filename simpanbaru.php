<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "phb_kelas_c";

$koneksi = new mysqli($server, $username, $password, $db);
if($koneksi->connect_error) {
    echo "gagal koneksi : " . $koneksi->connect_error;
}else {
    echo "sambungan basis data berhasil";
}

//echo "NIM : ". $_POST["kode"];
//echo "NAMA : ". $_POST["namaBarang"];
//echo "JURUSAN : ". $_POST["stok"];

$query = "insert into stok_barang(kode, nama_barang, stok)".
"values(". $_POST["kode"]. ",'". $_POST["nama barang"]. "',". $_POST["stok"]. ")";

echo "<br>".$query;

if($koneksi->query($query) === true) {
    echo "<br> Data ". $_POST["nama barang"]. "berhasil disimpan".'<a href="main.php">Lihat Data</a>';
}else{
    $koneksi->error;
    echo "<br>Data gagal disimpan";
}

$koneksi->close();
?>