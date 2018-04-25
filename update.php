<?php
include "koneksi.php";

$koneksi0bj = new koneksi();
$koneksi = $koneksi0bj->getKoneksi();

if($koneksi->connect_error) {
    echo "Gagal koneksi : ".koneksi->connect_error;
}else {
    echo "sambungan basis data berhasil";
}

//update stok_barang
/set nama_barang = 'nama_barang',
/stok = {stok}
/where kode = {kode};

$query = "update stok_barang".
        "set nama_barang = '".$_post["nama_barang"]. "',"
        "   stok = ".$_post["stok"]. " ".
        "where kode = ".$_post["kode"];
if($koneksi->query($query) === true) {
    echo "<br> data " . $_post["nama_barang]. "berhasil di ubah";
    '<a href="main.php">lihat data</a>';
}else{
    echo "<br>data gagal disimpan";
}