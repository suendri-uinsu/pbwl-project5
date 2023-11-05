<?php

require_once "app/Kategori.php";

$id = $_GET['id'];

$kat = new Kategori();
$rows = $kat->delete($id);

?>

<h1>Delete Kategori</h1>

Data berhasil dihapus!

<a href="index.php?hal=kat_tampil">Kembali</a>