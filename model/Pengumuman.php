<?php

class News
{
    private $id;
    private $judul;
    private $isi;

    public function setid($id)
    {
        $this->id = $id;
    }

    public function getid()
    {
        return $this->id;
    }

    public function setjudul($judul)
    {
        $this->judul = $judul;
    }

    public function getjudul()
    {
        return $this->judul;
    }

    public function setisi($isi)
    {
        $this->isi = $isi;
    }

    public function getisi()
    {
        return $this->isi;
    }

    public function save($judul, $isi)
    {
        include '../koneksi.php';
        $stmt = $conn->prepare('INSERT into pengumuman (judul, isi) VALUES(?, ?)');
        $stmt->execute([$judul, $isi]);
    }
}
?>
