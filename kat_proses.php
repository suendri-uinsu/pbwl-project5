<?php

require_once "app/Kategori.php";

$kat = new Kategori();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:index.php?hal=kat_tampil");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:index.php?hal=kat_tampil");
}
