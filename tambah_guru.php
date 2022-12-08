<h3>Tambah Guru</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130px">NIP</td>
            <td><input type="number" name="nip"></td>
        </tr>
        <tr>
            <td width="130px">Nama Guru</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td width="130px">Alamat</td>
            <td><input type="text" name="alamat"></td>
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
    mysqli_query($koneksi,"insert into guru set 
    nip = '$_POST[nip]',
    nama = '$_POST[nama]',
    alamat = '$_POST[alamat]'");
    echo "Data guru telah tersimpan";
}
?>