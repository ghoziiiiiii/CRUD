<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from user where id_user='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>
<h3 style ="color : red"> Form User</h3>
<form action="" method="post">
    <table>
        <tr>
            <td style ="color : blue" width="130"> ID_User </td>
            <td> <Input Type = "text" name="id_user"value="<?php echo $data['id_user']; ?>"></td>
        </tr>
        <tr>
            <td style ="color : blue" width="130"> Nama</td>
            <td> <Input Type = "text" name="nama"value="<?php echo $data['nama']; ?>"></td>
        </tr>
            <td style ="color : blue" width="130"> Email</td>
            <td> <Input Type = "text" name="email"value="<?php echo $data['email']; ?>"></td>
        </tr>
        </tr>
            <td style ="color : blue" width="130"> No_Telp</td>
            <td> <Input Type = "text" name="no_telp"value="<?php echo $data['no_telp']; ?>"></td>
        </tr>
        </tr>
            <td style ="color : blue" width="130"> Password</td>
            <td> <Input Type = "password" name="password"value="<?php echo $data['password']; ?>"></td>
        </tr>
        <tr><td></td></tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" value="simpan" name="proses">
            <a href="index.php"><button>Home</a></button>
            <a href="tampiluser.php"><button>Tampilan Data</a></button>
        </td>
    </tr>

    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "UPDATE user set
    nama = '$_POST[nama]',
    email = '$_POST[email]',
    no_telp = '$_POST[no_telp]',
    password = '$_POST[password]'
    where id_user = '$_POST[id_user]'");

    echo "Data barang baru telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='tampiluser.php'>";
}
?>