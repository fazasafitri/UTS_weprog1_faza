<?php
include "koneksi.php";

$koneksiObj = new koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "Gagal koneksi : ".$koneksi->connect_error;
}
$query = "select * from stok_barang where kode='".
    $_GET["kode"]. "'";
$data = $koneksi->query($query);
$namaBarang = "";
$stok = "";
if($data->num_rows <= 0) {
    echo "mas/mba, kalau isi data sesuai prosedur yah!";
}else {
    while($row = $data->fetch_assoc()){
        $namaBarang =$row["nama_barang"];
        $stok = $row["stok"];
    }
}
?>
<from action="update.php" method="post">
    <table>
        <tr>
            <td>NIM </td>
            <td>: <input type="text" name="kode" readonly="true"
                value=<?php echo $_GET["kode"]; ?> ></td>
            </tr>
            <tr>
                <td>NAMA </td>
                <td> : <input type="text" name="stok"
                value=<?php echo $namaBarang; ?>></td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td> : <input type="text" name="stok"
                value=<?php echo $stok; ?>></td>
            </tr>
            </table>
            <input type="submit" value="simpan">
    </form>
