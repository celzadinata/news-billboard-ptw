<?php
include '../koneksi.php';
$stmt = $conn->prepare('SELECT * FROM pengumuman');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ);
