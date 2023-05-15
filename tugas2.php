<?php
class mahasiswa
{
    public $nim;
    public $nama;
    public $jurusan;

    function __construct($nim, $nama, $jurusan)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }
    function tampil_biodata()
    {
        echo $this->nim;
        echo $this->nama;
        echo $this->jurusan;
    }
}

$siswa = new mahasiswa("01", "abdulloh", "PPLG");
$siswa->tampil_biodata();
