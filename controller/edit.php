<?php
include '../koneksi.php';
try {
    $stmt = $conn->prepare('UPDATE pengumuman SET judul=?, isi=? WHERE id=?');
    $stmt->execute([$_POST['judul'], $_POST['isi'], $_POST['id']]);
    header("Location: ../view/update_news.php");
    exit();
} catch (Exception $ex) {
    throw new Exception("Terjadi Kesalahan " . $ex->getMessage());
}
