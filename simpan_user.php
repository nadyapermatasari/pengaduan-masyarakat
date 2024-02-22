<?php
include 'koneksi.php';

$user= $_POST['username'];
$pass= $_POST['password'];


$sql=mysqli_query($db, "insert into user(username,password) 
values('$user','$pass')");
if ($sql) {
    header("location:index.html");
}
?>
