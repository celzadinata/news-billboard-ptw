<?php
include '../koneksi.php';
try {
    $stmt = $conn->prepare('DELETE FROM pengumuman WHERE id=?');
    $stmt->execute([$_GET['id']]);
    header("Location: ../view/delete_news.php");
    exit();
} catch (Exception $ex) {
    throw new Exception("Terjadi Kesalahan " . $ex->getMessage());
}
