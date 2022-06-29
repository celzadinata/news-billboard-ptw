<?php

class Hashtag
{
    private $id;
    private $nama_hashtag;

    public function setid($id)
    {
        $this->id = $id;
    }

    public function getid()
    {
        return $this->id;
    }

    public function setnama_hashtag($nama_hashtag)
    {
        $this->nama_hashtag = $nama_hashtag;
    }

    public function getnama_hashtag()
    {
        return $this->nama_hashtag;
    }

    public function view()
    {
        // include '../koneksi.php';
    }
}
?>
