<h3> Form Input Barang </h3>
<form action="" method="post">
    <table>
        <tr>
            <td width="130"> Kode Barang </td>
            <td> <Input Type = "text" name="kode_barang"></td>
        </tr>
        <tr>
            <td width="130"> Nama Barang </td>
            <td> <Input Type = "text" name="nama_barang"></td>
        </tr>
            <td width="130"> Harga Barang </td>
            <td> <Input Type = "text" name="harga_barang"></td>
        </tr>
        <tr>
            
            <td></td>
        <td>
            <input type="submit" value="simpan" name="proses">
            <a href="index.php"><button>Kembali</a></button>
            <a href="barang-data.php"><button>Tampilkan Data</a></button>
        </td>
        </tr>

    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into barang set
    kode_barang = '$_POST[kode_barang]',
    nama_barang = '$_POST[nama_barang]',
    harga_barang = $_POST[harga_barang]");

    echo "Data barang baru telah tersimpan";
}
?>