<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $id = $_POST['id'];
    $tgl_pengaduan = $_POST['tgl_pengaduan'];
    $alamat = $_POST['alamat'];
    $judul_pengaduan = $_POST['judul_pengaduan'];
    $isi_laporan = $_POST['isi_laporan'];



    // buat query update
    $sql = "UPDATE pengaduan SET tgl_pengaduan='$tgl_pengaduan', alamat='$alamat', judul_pengaduan='$judul_pengaduan', isi_laporan='$isi_laporan' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: indexx.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
