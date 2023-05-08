<?php
    class mahasiswa{
        public $nim = 16 0204 0036;
        public $nama = "abdulloh";
        public $jurusan = "PPLG";

        function tampil_biodata(){
            echo $this->nim;
            echo $this->nama;
            echo $this->jurusan;
        }
    }

    $siswa = new mahasiswa();
    $siswa->tampil_biodata();
?>