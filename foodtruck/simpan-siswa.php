<?php

include('koneksi.php');

//get data dari form
$nisn           = $_POST['nisn'];
$namaLengkap    = $_POST['nama_lengkap'];
$jurusan        = $_POST['jurusan'];
$kelas          = $_POST['kelas'];
$alamat         = $_POST['alamat'];
$email          = $_POST['email'];
$hp             = $_POST['nohp'];


$query = "INSERT INTO siswa(nisn, nama, jurusan, kelas, alamat, email, no_hp) VALUES ($nisn, $namaLengkap, $jurusan, $kelas, $alamat, $email, $hp)";


if($connection->query($query)){
    header("location: index.php");
}else{
    echo "Data Gagal Disimpan";
}

?>