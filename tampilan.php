<h1>Data siswa</h1>

<table border="1">
    <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($koneksi, "select * from siswa");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
        <td>$no</td>
        <td>$tampil[nama_siswa]</td>
        <td>$tampil[kelas]</td>
        <td>$tampil[alamat_siswa]</td>
        <td><a href='?kode=$tampil[id]'>Hapus</a></td>
        <td><a href='ubah_siswa.php?kode=$tampil[id]'>Ubah</a></td>
        </tr>";
        $no++;
    }
    ?>
</table>

<?php
include "koneksi.php";
if(isset($_GET['kode'])){
    mysqli_query($koneksi, "delete from siswa where id='$_GET[kode]'");

    echo "Data telah terhapus";
    echo "<meta http-equiv=refresh content=2;URL='tampilan.php'";
}

?>