<?php
// include database connection file
include 'koneksi.php';

$nidn = trim($_POST['nidn']);
$nama    = $_POST['nama'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];

$result = mysqli_query($koneksi, "UPDATE dosen SET 
    nama='$nama',
    alamat='$alamat',
    jabatan='$jabatan' 
    WHERE nidn='$nidn'");

if(mysqli_affected_rows($koneksi) == 0){
    echo "UPDATE gagal: NIDN tidak ditemukan.<br>";
    echo "NIDN yang dikirim: $nidn";
    exit;
}
// Redirect to homepage to display updated user in list
header("Location: dosen.php");
?>
