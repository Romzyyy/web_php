<h3>Tambah siswa</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130px">NIM </td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td width="130px">Nama </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td width="130px">Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td width="130px">Telp</td>
            <td><input type="text" name="telp"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>
</form>

<h1>Data siswa</h1>

<table border="1">
    <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($koneksi, "select * from mahasiswa");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
        <td>$no</td>
        <td>$tampil[nim]</td>
        <td>$tampil[nama]</td>
        <td>$tampil[alamat]</td>
        <td>$tampil[telp]</td>
        <td><a href='?kode=$tampil[nim]'>Hapus</a></td>
        <td><a href='ubah_siswa.php?kode=$tampil[nim]'>Ubah</a></td>
        </tr>";
        $no++;
    }
    ?>

</table>
<?php
include "koneksi.php";
$sql = mysqli_query($koneksi, "select * from mahasiswa where nim='$_GET[kode]'");
$data = mysqli_fetch_array($sql)
?>



<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into mahasiswa set 
    nim = '$_POST[nim]',
    nama = '$_POST[nama]',
    alamat = '$_POST[alamat]',
    telp = '$_POST[telp]'");
    header("location:tampilan.php");
}
if(isset($_GET['kode'])){
    mysqli_query($koneksi, "delete from mahasiswa where nim='$_GET[kode]'");
    echo "Data telah terhapus";
    header("location:tampilan.php");
}

?>