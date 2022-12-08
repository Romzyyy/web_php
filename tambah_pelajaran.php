<h3>Tambah siswa</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130px">Matapelajaran</td>
            <td><input type="text" name="matapelajaran"></td>
        </tr>
        <tr>
            <td width="130px">Masukan Hari</td>
            <td><input type="text" name="hari"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into matapelajaran set 
    matapelajaran = '$_POST[matapelajaran]',
    hari = '$_POST[hari]'");
    echo "Data siswa baru telah tersimpan";
}
?>