<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('barang') ?>">Barang</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?= site_url('barang/edit') ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $barang->id; ?>">
                    <div class="mb-3">
                        <label for="barcode" class="form-label">Barcode</label>
                        <input type="text" class="form-control" name="barcode" value="<?= $barang->barcode; ?>" placeholder="Barcode" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" value="<?= $barang->name; ?>" placeholder="Nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_jual" class="form-label">Harga Jual</label>
                        <input type="text" class="form-control" name="harga_jual" value="<?= $barang->harga_jual; ?>" placeholder="Harga Jual" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_beli" class="form-label">Harga Beli</label>
                        <input type="text" class="form-control" name="harga_beli" value="<?= $barang->harga_beli; ?>" placeholder="Harga Beli" required>
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="text" class="form-control" name="stok" value="<?= $barang->stok; ?>" placeholder="Stok" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" name="kategori_id" id="kategori_id" required>
                            <option value="">Choose...</option>
                            <?php foreach ($kategori as $kategori) : ?>
                            <option value="<?=$kategori->id ?>" <?=$barang->kategori_id == $kategori->id ? 'selected' : '' ?>><?=$kategori->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <select class="form-select" name="satuan_id" id="satuan_id" required>
                            <option value="">Choose...</option>
                            <?php foreach ($satuan as $satuan) : ?>
                            <option value="<?=$satuan->id ?>" <?=$barang->satuan_id == $satuan->id ? 'selected' : '' ?>><?=$satuan->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="user" class="form-label">User</label>
                        <select class="form-select" name="user_id" id="user_id" required>
                            <option value="">Choose...</option>
                            <?php foreach ($user as $user) : ?>
                            <option value="<?=$user->id ?>" <?=$barang->user_id == $user->id ? 'selected' : '' ?>><?=$user->username ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="supplier" class="form-label">Supplier</label>
                        <select class="form-select" name="supplier_id" id="supplier_id" required>
                            <option value="">Choose...</option>
                            <?php foreach ($supplier as $supplier) : ?>
                            <option value="<?=$supplier->id ?>" <?=$barang->supplier_id == $supplier->id ? 'selected' : '' ?>><?=$supplier->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh;"></div>
    </div>
</main>