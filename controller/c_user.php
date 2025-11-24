<?php
//memanggil file m_user yang ada pada folder model
include_once '../model/m_user.php';

//membuat variabel objek dari kelas m_user
$user = new m_user();


// tyr catch berfungsi untuk mengatasi error 
try {
    // untuk mengecek apakah ada aksi dari tombol 
    if (!empty($_GET['aksi'])) {

        // aski tambah berasal dari tampilan v_tambah_data_user 
        if (!($_GET['aksi']  == "hapus")) {

            if ($_GET['aksi'] == 'edit') {

                $id = $_GET['id'];

                $users = $user->tampil_data_by_id($id);

                include_once '../view/v_update_data_user.php';
            } else {
                // di dapat dari inputan user pada halaman v_tambah_data_user
                $id = $_POST['user_id'];
                $nama = $_POST['nama'];
                $email = $_POST['email'];

                if ($_GET['aksi']  == "tambah") {

                    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

                    //memanggil fungsi tambah pada m_user

                    $hasil = $user->tambah_data($id, $nama, $email, $pass);
                    if ($hasil) {
                        echo "<script>alert('Data Berhasil Ditambahkan');window.location='../view/v_tampil_data_user.php'</script>";
                    } else {
                        echo "<script>alert('Data Gagal Ditambahkan');window.location='../view/v_tambah_data_user'</script>";
                    }
                } else if ($_GET['aksi'] = "update") {
                    $hasil = $user->ubah_data($id, $nama, $email);

                    // echo var_dump($hasil);
                    // exit;
                    if ($hasil) {
                        echo "<script>alert('Data Berhasil Diubah');window.location='../view/v_tampil_data_user.php'</script>";
                    } else {
                        echo "<script>alert('Data Gagal Diubah');window.location='../view/v_update_data_user'</script>";
                    }
                }
            }
        } else {
            $result = $user->hapus_data($_GET['id']);

            if ($result) {
                echo "<script>alert('Data Berhasil Dihapus');window.location='../view/v_tampil_data_user.php'</script>";
            } else {
                echo "<script>alert('Data Tidak Berhasil Dihapus');window.location='../view/v_tampil_data_user.php'</script>";
            }
        }
    } else {
        //memanggil fungsi tampil data yang ada pada kelas m_user
        $result = $user->tampil_data();

        // mengecek apakah data yang ada ditabel user ada isinya atau tidak 
        if ($result->num_rows > 0) {

            // merubah data menjadi data berbentuk objek dan dimasukan kedalam variabel array
            while ($data = mysqli_fetch_object($result)) {
                // menyimpan data objek kedalam variabel array 
                $users[] = $data;
            }

            //kemablikan nilai array yang didalamnya terdapat data objek
            // $users;
        }
        $users;
    }
} catch (Exception $z) {
    echo $z->getMessage();
}

if ('hitung') {
}
