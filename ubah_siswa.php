<?php
include "koneksi.php";
$sql = mysqli_query($koneksi, "select * from mahasiswa where nim='$_GET[kode]'");
$data = mysqli_fetch_array($sql)
?>
<h3>Ubah Mahasiswa</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130px">NIM</td>
            <td><input type="text" name="nim" value="<?php echo $data['nim']; ?>"></td>
        </tr>
        <tr>
            <td width="130px">Nama</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <tr>
            <td width="130px">Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
        </tr>
        <tr>
            <td width="130px">Telp</td>
            <td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="simpan"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"update mahasiswa set
    nama = '$_POST[nama]',
    alamat = '$_POST[alamat]',
    telp = '$_POST[telp]'
    where nim = '$_GET[kode]'");
    echo "Data mahasiswa baru telah di ubah";
    header("location:tampilan.php");
}
?>