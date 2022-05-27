<?php
session_start();
include 'Koneksi.php';
$noMember = $_POST['nomor_member'];
$password = $_POST['passwd'];


$sql = koneksi()->prepare("SELECT * FROM member WHERE nomor_member = :noMember");
$sql->bindParam('noMember', $noMember, PDO::PARAM_STR);
$sql->execute();
$hasil = $sql->fetch();
if ($hasil) {
    if (password_verify($password, $hasil["password"])) {
        $_SESSION["nomor_member"] = $hasil['nomor_member'];
        $_SESSION["nama_member"] = $hasil['nama'];
        header("Location: index.php");
    }
} else {
    header("Location: FormLogin.php");
}
