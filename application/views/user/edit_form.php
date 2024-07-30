<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?=site_url('user')?>">User</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= site_url('user/edit')?>" method="POST">
                    <input type="hidden" name="id" value="<?= $user->id; ?>">
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK<code>*</code></label>
                        <input type="text" class="form-control" name="nik" value="<?= $user->nik; ?>" placeholder="NIK" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username<code>*</code></label>
                        <input type="text" class="form-control" <?php echo form_error('username') ? 'is-invalid':'' ?> name="username" value="<?= $user->username; ?>" placeholder="Username" required>

                        <div class="invalid-feedback">
                            <?php  echo form_error('username') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="full_name" class="form-label">Full Name<code>*</code></label>
                        <input type="text" class="form-control" name="full_name" value="<?= $user->full_name; ?>" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" value="<?= $user->phone; ?>" placeholder="Phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $user->email; ?>" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="alamat" class="form-control" name="alamat" value="<?= $user->alamat; ?>" placeholder="Alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" name="role" id="role" required>
                            <?php if ($user->role == 'Pemilik'){ ?>
                            <option value="Pemilik" selected>Pemilik</option>
                            <option value="Admin">Admin</option>
                            <option value="Kasir">Kasir</option>
                            <?php }else if ($user->role == 'Admin'){ ?>
                            <option value="Pemilik">Pemilik</option>
                            <option value="Admin" selected>Admin</option>
                            <option value="Kasir">Kasir</option>
                            <?php }else{ ?>
                            <option value="Pemilik">Pemilik</option>
                            <option value="Admin">Admin</option>
                            <option value="Kasir" selected>Kasir</option>
                            <?php } ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh;"></div>
    </div>
</main>