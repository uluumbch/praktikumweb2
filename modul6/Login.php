<?php
session_start();
include 'Koneksi.php';
$noMember = $_POST['nomor_member'];
// $password = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
$password = $_POST['passwd'];

var_dump($noMember);
var_dump($password);
$sql = koneksi()->prepare("SELECT * FROM member WHERE nomor_member = :noMember AND password = :passwd");
// $sql->execute(array(
//     ':noMember' => $noMember,
//     ':passwd' => $password
// ));
$sql->bindParam('noMember', $noMember, PDO::PARAM_STR);
$sql->bindParam('passwd', $password, PDO::PARAM_STR);
$sql->execute();

var_dump($sql->rowCount());

if ($sql->rowCount() > 0) {
    $_SESSION["nomor_member"] = $noMember;
    var_dump($_SESSION);
    header("Location: index.php");
} else {
    header("Location: FormLogin.php");
}
