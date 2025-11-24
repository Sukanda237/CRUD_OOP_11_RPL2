<?php

class m_koneksi
{

    private $host = "localhost", // di hp ganti menjadi 127.0.0.1
        $username = "root",
        $pass = "", //di hp passwordnya root
        $db = "11_rpl_4_2025_6"; //nama databasenya disesuaikan dengan studikasus 

    public $koneksi;

    // membuat konstrak yang dimana fungsi ini akan dijalankan otomatis ketika kita membuat objek dari kelas koneksi 
    function __construct()
    {
        // untuk menghubungkan file php dengan database yang kita gunakan 
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->pass, $this->db, 3306);

        //mengecek properti koneksi barhasil atau gagal
        if ($this->koneksi) {
            // echo "koneksi kedabase " . $this->db . " berhasil";

            // mengembalikan nilai true jika koneksi kedadatabase berhasil 
            return $this->koneksi;
        } else {
            //memunculkan pesan error jika koneksi kedatabase gagal
            die("koneksi kedatabase gagal" . mysqli_connect_error());
        }
    }
}

// $koneksi = new m_koneksi();
