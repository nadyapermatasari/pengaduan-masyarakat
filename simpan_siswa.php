<?php

include("koneksi.php");


if(isset($_POST['daftar'])){

   
    $tgl_pengaduan= $_POST['tgl_pengaduan'];
    $alamat = $_POST['alamat'];
    $judul_pengaduan = $_POST['judul_pengaduan'];
    $isi_laporan = $_POST['isi_laporan'];
   


  
    $sql = "INSERT INTO pengaduan (tgl_pengaduan,alamat,judul_pengaduan,isi_laporan) VALUE ('$tgl_pengaduan', '$alamat','$judul_pengaduan','$isi_laporan')";
    $query = mysqli_query($db, $sql);

   
    if( $query ) {
      
        header('Location: indexx.php?status=sukses');
    } else {
       
        header('Location: dashboard.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}
