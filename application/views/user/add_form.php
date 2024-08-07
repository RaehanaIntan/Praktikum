<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?=site_url('user')?>">User</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= site_url('user/save')?>" method="POST">
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK<code>*</code></label>
                        <input type="text" class="form-control" name="nik" placeholder="NIK" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username<code>*</code></label>
                        <input type="text" class="form-control" <?php echo form_error('username') ? 'is-invalid':'' ?> name="username" placeholder="Username" required>
                        <div class="invalid-feedback">
                            <?php  echo form_error('username') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="full_name" class="form-label">Full Name<code>*</code></label>
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="alamat" class="form-control" name="alamat" placeholder="Alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" name="role" id="role" required>
                            <option value="">Choose...</option>
                            <option value="Pemilik">Pemilik</option>
                            <option value="Admin">Admin</option>
                            <option value="Kasir">Kasir</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh;"></div>
    </div>
</main>