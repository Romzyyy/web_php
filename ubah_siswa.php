<?php
include "koneksi.php";
$sql = mysqli_query($koneksi, "select * from siswa where id='$_GET[kode]'");
$data = mysqli_fetch_array($sql)
?>

<h3>Ubah siswa</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130px">Nama Siswa</td>
            <td><input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa']; ?>"></td>
        </tr>
        <tr>
            <td width="130px">Kelas</td>
            <td><input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"></td>
        </tr>
        <tr>
            <td width="130px">Alamat</td>
            <td><input type="text" name="alamat_siswa" value="<?php echo $data['alamat_siswa']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
    <button><a href="index.php">Batalkan perubahan</a></button>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"update siswa set
    nama_siswa = '$_POST[nama_siswa]',
    kelas = '$_POST[kelas]',
    alamat_siswa = '$_POST[alamat_siswa]',
    where id = '$_GET[kode]'");
    echo "Data siswa baru telah di ubah";
    echo "<meta http-equiv=refresh content=1;URL='tampilan.php'";
}
?>