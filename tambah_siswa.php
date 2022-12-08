<h3>Tambah siswa</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130px">Nama Siswa</td>
            <td><input type="text" name="nama_siswa"></td>
        </tr>
        <tr>
            <td width="130px">Kelas</td>
            <td><input type="text" name="kelas"></td>
        </tr>
        <tr>
            <td width="130px">Alamat</td>
            <td><input type="text" name="alamat_siswa"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
    <button><a href="index.php">Kembali</a></button>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into siswa set 
    nama_siswa = '$_POST[nama_siswa]',
    kelas = '$_POST[kelas]',
    alamat_siswa = '$_POST[alamat_siswa]'");
    echo "Data siswa baru telah tersimpan";
}
?>