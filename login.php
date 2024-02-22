<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($db,"select * from user where username='$username' 
and password='$password'");
$cek = mysqli_num_rows($data);
if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:indexx.php");
}else{
    echo "<script>alert('Username atau Password Anda Salah, Silihkan Coba Lagi!')</script>";
}
?>
