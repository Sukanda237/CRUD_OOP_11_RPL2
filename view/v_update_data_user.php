<?php
include_once 'template/header_edit.php';
// include_once '../controllers/c_nilai.php';
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Form Update Data User</h4>
                </div>
                <div class="card-body">
                    <form action="../controller/c_user.php?aksi=update" method="post">

                        <!-- data single  -->
                        <input type="hidden" name="user_id" value="<?= $users->user_id ?>">

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="<?= $users->nama ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="<?= $users->email ?>" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100" name="update" value="Kirim">kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'template/footer.php'; ?>