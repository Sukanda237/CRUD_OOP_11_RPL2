<?php
include_once "m_koneksi.php";

class m_user
{

    function tampil_data()
    {

        //membuat objek dari kelas m_koneksi
        $koneksi = new m_koneksi();

        //query untuk menmpilkan semua data dari tabel user
        $sql = "SELECT * FROM users ORDER BY user_id DESC";

        // perintah untuk menjalankan sql tampil data 
        $query = mysqli_query($koneksi->koneksi, $sql);

        return $query;
    }

    function tampil_data_by_id($id)
    {

        $koneksi = new m_koneksi();

        // uder_id disesuaikan dengan field pada tabel yang kalian gunakan 
        $sql = "SELECT * FROM users WHERE user_id = $id";

        $query = mysqli_query($koneksi->koneksi, $sql);

        //udah data menjadi objek dan data ini berupa single data 
        return mysqli_fetch_object($query);
    }

    function tambah_data($id, $nama, $email, $pass)
    {

        $koneksi = new m_koneksi();

        $sql = "INSERT INTO users VALUES ('$id', '$nama', '$email', '$pass')";

        $query = mysqli_query($koneksi->koneksi, $sql);

        return $query;
    }

    function ubah_data($id, $nama, $email) //paramternya juga di sesuaikan
    {

        $koneksi = new m_koneksi();
        // di sesuaikan dengan studi kasus 
        $sql = "UPDATE users SET nama = '$nama', email = '$email' WHERE user_id = '$id'";

        return mysqli_query($koneksi->koneksi, $sql);
    }

    function hapus_data($id)
    {

        $koneksi = new m_koneksi();

        $sql = "DELETE FROM users WHERE user_id = $id";

        return mysqli_query($koneksi->koneksi, $sql);
    }

    function hitung() {}
}
