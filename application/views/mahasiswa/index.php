<div class="container">
    <?php if ($this->session->flashdata('message')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('message'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data pelanggan ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Data Tiket</h3>
            <?php if (empty($mahasiswa)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">nama_kereta</th>
                        <th class="text-center" scope="col">berangkat</th>
                        <th class="text-center" scope="col">datang</th>
                        <th class="text-center" scope="col">durasi</th>
                        <th class="text-center" scope="col">harga</th>
                        <th class="text-center" scope="col">keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($mahasiswa as $mhs) : ?>
                        <td class="text-center"><?= $mhs['nama_kereta']; ?></td>
                        <td class="text-center"><?= $mhs['berangkat']; ?></td>
                        <td class="text-center"><?= $mhs['datang']; ?></td>
                        <td class="text-center"><?= $mhs['durasi']; ?></td>
                        <td class="text-center"><?= $mhs['harga']; ?></td>
                        <td class="text-center"><?= $mhs['keterangan']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                            <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-success float-center" ?>ubah</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url('Mahasiswa/tambah')?>" class="btn btn-primary">Tambah Data tiket</a>
                </div>
            </div>

        </div>
    </div>
</div> 