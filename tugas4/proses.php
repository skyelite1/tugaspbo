<?php 

    

    class petugas{
        public $id_petugas;
        public $nama_petugas;
        public $username;
        public $password;
        public $telp;
        public $level;

        function __construct($id_petugas,$nama_petugas,$username,$password,$telp,$level)
        {
            $this->id_petugas = $id_petugas;
            $this->nama_petugas = $nama_petugas;
            $this->username = $username;
            $this->password = $password;
            $this->telp = $telp;
            $this->level = $level;
        }

        function TampilBiodata()
        {
            $this->id_petugas;
            $this->nama_petugas;
            $this->username;
            $this->password;
            $this->telp;
            $this->level;
        }

        function tambah(){
            include "koneksi.php";
            $koneksi->query("INSERT INTO petugas VALUES ('$this->id_petugas', '$this->nama_petugas', '$this->username','$this->password','$this->telp','$this->level')");
        }
        function hapus(){
            include "koneksi.php";
            $koneksi->query("DELETE FROM `petugas` WHERE id_petugas='$this->id_petugas'");
        }

        function update($nama_petugas,$data_username,$data_password,$telp,$level){
            include "koneksi.php";
            $koneksi->query("UPDATE `petugas` SET `nama_petugas`='$nama_petugas',`username`='$data_username',`password`='$data_password',`telp`='$telp',`level`='$level' WHERE id_petugas='$this->id_petugas'");
        }



}
    $warga = new petugas("111","Budi","budi12","12233","08447","petugas");
    // $warga->tambah();
    // $warga->hapus();
    // $warga->update("","","","");
?>