<center>
<h3>USER</h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>id_user</th>
        <th>nama</th>
        <th>email</th>
        <th>no_telp</th>
        <th>password</th>
        <th colspan="2"> Aksi</th>
    </tr>

    <?php
include "koneksi.php";
$no = 1;
$ambildata = mysqli_query($koneksi, "SELECT * FROM user");
while ($tampil = mysqli_fetch_array($ambildata)){
    echo"
    <tr>
        <td>$no</td>
        <td>$tampil[id_user]</td>
        <td>$tampil[nama]</td>
        <td>$tampil[email]</td>
        <td>$tampil[no_telp]</td>
        <td>$tampil[password]</td>
        <td><a href='?kode=$tampil[id_user]'> Hapus</a></td>
        <td><a href='edituser.php?kode=$tampil[id_user]'> Ubah </a></td>
    </tr>";

$no++;
}
?>
</table>

<?php
if(isset($_GET['kode'])){

    mysqli_query($koneksi, "delete from user where id_user='$_GET[kode]'");

    echo "Data Telah terhapus";
    echo "<meta http-equiv=refresh content=2;URL='tampiluser.php'>";
}
?>
</table><br>

<a href="index.php"><button>Home</a></button>
<a href="inputuser.php"><button>Forum User</a></button>