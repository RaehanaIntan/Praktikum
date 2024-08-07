<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?=site_url('kategori')?>">Kategori</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?= site_url('kategori/add')?>"><i class="fas fa-plus"></i>  Add New</a>
            </div>
            <?php  if ($this->session->flashdata('success')): ?>
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
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($kategori as $kategori){
                            echo "
                            <tr>
                                <td class='text-center'>$no</td>
                                <td>$kategori->name</td>
                                <td class='text-center'>
                                    <div>
                                        <a href=".base_url('kategori/getedit/'.$kategori->id)." class='btn btn-sm btn-info'><i class='fas fa-edit'></i> Edit</a>
                                        <a href=".base_url('kategori/delete/'.$kategori->id)." class='btn btn-sm btn-danger' onclick='return confirm(\"Ingin menghapus data kategori ini?\");'><i class='fas fa-trash'></i> Hapus</a>
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