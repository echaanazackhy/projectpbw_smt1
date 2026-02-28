<?php
include 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$bagian = $_POST['bagian'];
$input = mysqli_query($koneksi, "INSERT INTO pegawai (nik, nama, bagian) VALUES('$nik', '$nama', '$bagian')");

if($input){
    echo "<script>
    alert('Data Berhasil Disimpan');
    window.location.href = 'pegawai.php';
    </script>";
} else {
    echo "<script>
    alert('Gagal Menyimpan Data');
    window.location.href = 'pegawai.php';
    </script>";
}
?>