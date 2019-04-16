<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Mahasiswa
                    
                </div>
                <div class="card-body">
                    <form action="" method="post">

                        <input type="hidden" name="id" value="<?php echo $mahasiswa->id ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mahasiswa->nama ?>">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $mahasiswa->nim ?>">
                            <small class="form-text text-danger"><?= form_error('nim') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $mahasiswa->email ?>">
                            <small class="form-text text-danger"><?= form_error('email') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>

                            <?php $jurusan = $mahasiswa->jurusan; ?>
                            <select class="form-control" id="jurusan" name="jurusan">
                            <option <?php echo ($jurusan == 'Teknik Informatika') ? "selected": "" ?>>Teknik Informatika</option>
                            <option <?php echo ($jurusan == 'Teknik Industri') ? "selected": "" ?>>Teknik Industri</option>
                            <option <?php echo ($jurusan == 'Teknik Elektro') ? "selected": "" ?>>Teknik Elektro</option>
                            <option <?php echo ($jurusan == 'DKV') ? "selected": "" ?>>DKV</option>
                            <option <?php echo ($jurusan == 'MBTI') ? "selected": "" ?>>MBTI</option>
                            
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>