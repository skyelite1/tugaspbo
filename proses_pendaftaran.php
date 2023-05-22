<?php

class mahasiswa {

    public $nama;
    public $email;
    public $password;

    function __construct($nama,$email,$password)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
    }

    function TampilBiodata(){
        echo $this->nama, "<br />";
        echo $this->email, "<br />";
        echo $this->password;
    }

    function validasi(){
        if($this->nama == ""){
            echo "input nama kosong, silahkan isi terlebih dahulu <br />";
        }

        if($this->email == ""){
            echo "input email kosong, silahkan isi terlebih dahulu <br />";
        }
        
        if($this->password == ""){
            echo "input password kosong, silahkan isi terlebih dahulu";
        }

        if($this->nama == "" AND $this->password == "" AND $this->email == ""){
            return false;
        }else{
            return true;
        }
    }

}

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$siswa = new mahasiswa($nama, $email, $password);
if($siswa->validasi()){
    $siswa->TampilBiodata();
}
?>