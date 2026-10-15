<?php

$namsu = $_POST['namasukucadang'];
$kode = $_POST['kodesparepart'];

$koneksi = mysqli_connect('localhost', 'root', '', 'db_belajar');
$sql = "INSERT INTO barang(nama_suku_cadang, kode_sparepart) VALUES ('$namsu', $kode)";
$q = mysqli_query($koneksi, $sql);

if($q){
    echo "<script>
        alert('Data Berhasil Di Simpan');
        window.location = 'form.php';
    </script>";
}