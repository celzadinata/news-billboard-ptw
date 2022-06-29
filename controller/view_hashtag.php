<?php
include '../koneksi.php';
$stmt = $conn->prepare('SELECT * FROM hashtag');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ);
?>