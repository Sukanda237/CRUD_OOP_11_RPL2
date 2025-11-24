<?php
include_once 'template/header.php';
include_once '../controller/c_user.php';
?>

<div class="container-fluid main-content">
    <h2 class="text-center mb-4">Daftra User</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <!-- <th>Jenis Kelamin</th>
                    <th>Tempat, Tanggal Lahir</th> -->
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <?php
                $no = 1;
                foreach ($users as $data): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->email ?></td>
                        <td>
                            <a href="../controller/c_user.php?aksi=edit&id=<?= $data->user_id; ?>" class="btn btn-warning">Update</a>

                            <a href="../controller/c_user.php?id=<?= $data->user_id; ?>&aksi=hapus" onclick="return confirm('Anda yakin mau menghapus data ini ?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?php include_once 'template/footer.php'; ?>