<?php

    

    class masyarakat{
        public $nik;
        public $nama;
        public $username;
        public $password;
        public $telp;

        function __construct($nik,$nama,$username,$password,$telp)
        {
            $this->nik = $nik;
            $this->nama = $nama;
            $this->username = $username;
            $this->password = $password;
            $this->telp = $telp;
        }

        function TampilBiodata()
        {
            $this->nik;
            $this->nama;
            $this->username;
            $this->password;
            $this->telp;
        }

        function tambah(){
            include "koneksi.php";
            $koneksi->query("INSERT INTO masyarakat VALUES ('$this->nik', '$this->nama', '$this->username','$this->password','$this->telp')");
        }
        function hapus(){
            include "koneksi.php";
            $koneksi->query("DELETE FROM `masyarakat` WHERE nik='$this->nik'");
        }

        function update($nama,$data_username,$data_password,$telp){
            include "koneksi.php";
            $koneksi->query("UPDATE `masyarakat` SET `nama`='$nama',`username`='$data_username',`password`='$data_password',`telp`='$telp' WHERE nik='$this->nik'");
        }


}
    $warga = new masyarakat("12345","awee","awee123","123456","0888");
    $warga->update("zaky","zaky1222","","");
?>