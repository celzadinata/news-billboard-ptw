<?php
include '../koneksi.php';
try {
    $stmt = $conn->prepare('SELECT * FROM pengumuman Where id=?');
    $stmt->execute([$_GET['id']]);
    $result = $stmt->fetch(PDO::FETCH_OBJ);
} catch (\Throwable $th) {
    return null;
}
