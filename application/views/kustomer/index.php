<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('kustomer') ?>">Kustomer</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <a href="<?= site_url('kustomer/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                <button type="button" class="btn btn-primary" onclick="window.open('<?= site_url('kustomer/kustomerlap') ?>', '_blank')"><i class="fas fa-file"></i> Laporan</button>
            </div>
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= $this->session->flashdata('success') ?>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="datakelas" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Telp</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($kustomer as $kustomer) {
                                echo "
                            <tr>
                                <td class='text-center'>$no</td>
                                <td>$kustomer->nik</td>
                                <td>$kustomer->name</td>
                                <td>$kustomer->telp</td>
                                <td>$kustomer->email</td>
                                <td>$kustomer->alamat</td>
                                <td class='text-center'>
                                    <div>
                                        <a href=" . base_url('kustomer/getedit/' . $kustomer->id) . " class='btn btn-sm btn-info'><i class='fas fa-edit'></i> Edit</a>
                                        <a href=" . base_url('kustomer/delete/' . $kustomer->id) . " class='btn btn-sm btn-danger' onclick='return confirm(\"Ingin menghapus data kustomer ini?\");'><i class='fas fa-trash'></i> Hapus</a>
                                    </div>
                                </td>
                            </tr>";
                                $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>