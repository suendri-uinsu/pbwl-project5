<?php

require_once "app/Kategori.php";

$kat = new Kategori();
$rows = $kat->tampil();

?>

<h2>Kategori</h2>

<a href="index.php?hal=kat_input">Tambah Kategori</a>
<table>
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>KETERANGAN</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['cat_id']; ?></td>
        <td><?php echo $row['cat_name']; ?></td>
        <td><?php echo $row['cat_text']; ?></td>
        <td><a href="index.php?hal=kat_edit&id=<?php echo $row['cat_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=kat_delete&id=<?php echo $row['cat_id']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>
