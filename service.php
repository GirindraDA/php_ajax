<?php 
include "koneksi.php";

if($_GET['action'] == 'save'){
    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    $query = mysqli_query($koneksi, "INSERT INTO mahasiswa(nama, jenisKelamin, alamat, telepon, email) VALUES ('$nama', '$jenisKelamin', '$alamat', '$telepon', '$email')");
    if($query){
        echo 'Data berhasil disimpan!';
    } else {
        echo 'Data gagal disimpan, karena : ' . mysqli_error($koneksi);
    }
} else if($_GET['action'] == 'edit'){
    $idMahasiswa = $_POST['idMahasiswa'];
    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    $query = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', jenisKelamin='$jenisKelamin', alamat='$alamat', telepon='$telepon', email='$email' WHERE idMahasiswa='$idMahasiswa'");
    if($query){
        echo 'Data berhasil di edit!';
    } else {
        echo 'Data gagal di edit, karena '. mysqli_error($koneksi);
    }
} else if($_GET['action'] == 'delete'){
    $idMahasiswa = $_POST['idMahasiswa'];
    $query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE idMahasiswa='$idMahasiswa'");
    if($query){
        echo 'Data berhasil dihapus!';
    }else {
        echo 'Data gagal dihapus, karena '. mysqli_error($koneksi);
    }
}

?>