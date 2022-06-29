<?php
include '../model/Pengumuman.php';
try {
    $pengumuman = new News();
    $pengumuman->setjudul($_POST['judul']);
    $pengumuman->setisi($_POST['isi']);
    $pengumuman->save($pengumuman->getjudul(), $pengumuman->getisi());
} catch (Exception $ex) {
    throw new Exception("Terjadi Kesalahan " . $ex->getMessage());
}
?>
