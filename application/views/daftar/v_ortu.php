<body class="bg-light">
    
<div class="container">
  <div class="py-5 text-center"></div>
    <div class="col-md order-md-1">
      <h4 class="mb-3 text-center">Data Ayah</h4>
      
      <hr>

      <form method="post" action="<?= base_url().'register/ortu';?>" class="needs-validation" novalidate  enctype="multipart/form-data"> 
        <!-- DATA AYAH -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nama_ayah">Nama Ayah</label>
            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= set_value('nama_ayah'); ?>" required>
            <?= form_error('nama_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="tempat_lahir_ayah">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir_ayah" name="tempat_lahir_ayah" value="<?= set_value('tempat_lahir_ayah'); ?>" required>
            <?= form_error('tempat_lahir_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="tanggal_lahir_ayah">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" placeholder="" value="<?= set_value('tanggal_lahir_ayah'); ?>" required>
            <?= form_error('tanggal_lahir_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="pendidikan_ayah">Pendidikan</label>
            <select class="custom-select d-block w-100" id="pendidikan_ayah" name="pendidikan_ayah" required>
              <option value="">Pilih...</option>
              <option value="Tidak Sekolah" <?= set_select('pendidikan_ayah', 'Tidak Sekolah'); ?>>Tidak Sekolah</option>
              <option value="SD/MI" <?= set_select('pendidikan_ayah', 'SD/MI'); ?>>SD/MI</option>
              <option value="SMP/MTS" <?= set_select('pendidikan_ayah', 'SMP/MTS'); ?>>SMP/MTS</option>
              <option value="SMA/SMK/MA" <?= set_select('pendidikan_ayah', 'SMA/SMK/MA'); ?>>SMA/SMK/MA</option>
              <option value="Diploma" <?= set_select('pendidikan_ayah', 'Diploma'); ?>>Diploma</option>
              <option value="S1" <?= set_select('pendidikan_ayah', 'S1'); ?>>S1</option>
              <option value="S2" <?= set_select('pendidikan_ayah', 'S2'); ?>>S2</option>
              <option value="S3" <?= set_select('pendidikan_ayah', 'S3'); ?>>S3</option>
            </select>
            <?= form_error('pendidikan_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="pekerjaan_ayah">Pekerjaan</label>
            <select class="custom-select d-block w-100" id="pekerjaan_ayah" name="pekerjaan_ayah" required>
              <option value="">Pilih...</option>
              <option value="Buruh" <?= set_select('pekerjaan_ayah', 'Buruh'); ?>>Buruh</option>
              <option value="Tani" <?= set_select('pekerjaan_ayah', 'Tani'); ?>>Tani</option>
              <option value="Wiraswasta" <?= set_select('pekerjaan_ayah', 'Wiraswasta'); ?>>Wiraswasta</option>
              <option value="PNS" <?= set_select('pekerjaan_ayah', 'PNS'); ?>>PNS</option>
              <option value="TNI/POLRI" <?= set_select('pekerjaan_ayah', 'TNI/POLRI'); ?>>TNI/POLRI</option>
              <option value="Perangkat Desa" <?= set_select('pekerjaan_ayah', 'Perangkat Desa'); ?>>Perangkat Desa</option>
              <option value="Nelayan" <?= set_select('pekerjaan_ayah', 'Nelayan'); ?>>Nelayan</option>
              <option value="Lain-lain" <?= set_select('pekerjaan_ayah', 'Lain-lain'); ?>>Lain-lain</option>
            </select>
            <?= form_error('pekerjaan_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>

        <br><br><br>

        <h4 class="mb-3 text-center">Data Ibu</h4>
        
        <hr>

        <!-- DATA IBU -->

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nama_ibu">Nama Ibu</label>
            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= set_value('nama_ibu'); ?>" required>
            <?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="tempat_lahir_ibu">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir_ibu" name="tempat_lahir_ibu" value="<?= set_value('tempat_lahir_ibu'); ?>" required>
            <?= form_error('tempat_lahir_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="tanggal_lahir_ibu">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" placeholder="" value="<?= set_value('tanggal_lahir_ibu'); ?>" required>
            <?= form_error('tanggal_lahir_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="pendidikan_ibu">Pendidikan</label>
            <select class="custom-select d-block w-100" id="pendidikan_ibu" name="pendidikan_ibu" required>
              <option value="">Pilih...</option>
              <option value="Tidak Sekolah" <?= set_select('pendidikan_ibu', 'Tidak Sekolah'); ?>>Tidak Sekolah</option>
              <option value="SD/MI" <?= set_select('pendidikan_ibu', 'SD/MI'); ?>>SD/MI</option>
              <option value="SMP/MTS" <?= set_select('pendidikan_ibu', 'SMP/MTS'); ?>>SMP/MTS</option>
              <option value="SMA/SMK/MA" <?= set_select('pendidikan_ibu', 'SMA/SMK/MA'); ?>>SMA/SMK/MA</option>
              <option value="Diploma" <?= set_select('pendidikan_ibu', 'Diploma'); ?>>Diploma</option>
              <option value="S1" <?= set_select('pendidikan_ibu', 'S1'); ?>>S1</option>
              <option value="S2" <?= set_select('pendidikan_ibu', 'S2'); ?>>S2</option>
              <option value="S3" <?= set_select('pendidikan_ibu', 'S3'); ?>>S3</option>
            </select>
            <?= form_error('pendidikan_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="pekerjaan_ibu">Pekerjaan</label>
            <select class="custom-select d-block w-100" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
              <option value="">Pilih...</option>
              <option value="Ibu Rumah Tangga" <?= set_select('pekerjaan_ibu', 'Ibu Rumah Tangga'); ?>>Ibu Rumah Tangga</option>
              <option value="Buruh" <?= set_select('pekerjaan_ibu', 'Buruh'); ?>>Buruh</option>
              <option value="Tani" <?= set_select('pekerjaan_ibu', 'Tani'); ?>>Tani</option>
              <option value="Wiraswasta" <?= set_select('pekerjaan_ibu', 'Wiraswasta'); ?>>Wiraswasta</option>
              <option value="PNS" <?= set_select('pekerjaan_ibu', 'PNS'); ?>>PNS</option>
              <option value="TNI/POLRI" <?= set_select('pekerjaan_ibu', 'TNI/POLRI'); ?>>TNI/POLRI</option>
              <option value="Perangkat Desa" <?= set_select('pekerjaan_ibu', 'Perangkat Desa'); ?>>Perangkat Desa</option>
              <option value="Nelayan" <?= set_select('pekerjaan_ibu', 'Nelayan'); ?>>Nelayan</option>
              <option value="Lain-lain" <?= set_select('pekerjaan_ibu', 'Lain-lain'); ?>>Lain-lain</option>
            </select>
            <?= form_error('pekerjaan_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>

        <br><br><br>

        <h4 class="mb-3 text-center">Data Wali</h4>
        
        <hr>

        <!-- DATA Wali -->

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nama_wali">Nama Wali</label>
            <input type="text" class="form-control" id="nama_wali" name="nama_wali" value="<?= set_value('nama_wali'); ?>" required>
            <?= form_error('nama_wali', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="tempat_lahir_wali">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir_wali" name="tempat_lahir_wali" value="<?= set_value('tempat_lahir_wali'); ?>" required>
            <?= form_error('tempat_lahir_wali', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="tanggal_lahir_wali">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir_wali" name="tanggal_lahir_wali" placeholder="" value="<?= set_value('tanggal_lahir_wali'); ?>" required>
            <?= form_error('tanggal_lahir_wali', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="pendidikan_wali">Pendidikan</label>
            <select class="custom-select d-block w-100" id="pendidikan_wali" name="pendidikan_wali" required>
              <option value="">Pilih...</option>
              <option value="Tidak Sekolah" <?= set_select('pendidikan_wali', 'Tidak Sekolah'); ?>>Tidak Sekolah</option>
              <option value="SD/MI" <?= set_select('pendidikan_wali', 'SD/MI'); ?>>SD/MI</option>
              <option value="SMP/MTS" <?= set_select('pendidikan_wali', 'SMP/MTS'); ?>>SMP/MTS</option>
              <option value="SMA/SMK/MA" <?= set_select('pendidikan_wali', 'SMA/SMK/MA'); ?>>SMA/SMK/MA</option>
              <option value="Diploma" <?= set_select('pendidikan_wali', 'Diploma'); ?>>Diploma</option>
              <option value="S1" <?= set_select('pendidikan_wali', 'S1'); ?>>S1</option>
              <option value="S2" <?= set_select('pendidikan_wali', 'S2'); ?>>S2</option>
              <option value="S3" <?= set_select('pendidikan_wali', 'S3'); ?>>S3</option>
            </select>
            <?= form_error('pendidikan_wali', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="pekerjaan_wali">Pekerjaan</label>
            <select class="custom-select d-block w-100" id="pekerjaan_wali" name="pekerjaan_wali" required>
              <option value="">Pilih...</option>
              <option value="Ibu Rumah Tangga" <?= set_select('pekerjaan_wali', 'Ibu Rumah Tangga'); ?>>Ibu Rumah Tangga</option>
              <option value="Buruh" <?= set_select('pekerjaan_wali', 'Buruh'); ?>>Buruh</option>
              <option value="Tani" <?= set_select('pekerjaan_wali', 'Tani'); ?>>Tani</option>
              <option value="Wiraswasta" <?= set_select('pekerjaan_wali', 'Wiraswasta'); ?>>Wiraswasta</option>
              <option value="PNS" <?= set_select('pekerjaan_wali', 'PNS'); ?>>PNS</option>
              <option value="TNI/POLRI" <?= set_select('pekerjaan_wali', 'TNI/POLRI'); ?>>TNI/POLRI</option>
              <option value="Perangkat Desa" <?= set_select('pekerjaan_wali', 'Perangkat Desa'); ?>>Perangkat Desa</option>
              <option value="Nelayan" <?= set_select('pekerjaan_wali', 'Nelayan'); ?>>Nelayan</option>
              <option value="Lain-lain" <?= set_select('pekerjaan_wali', 'Lain-lain'); ?>>Lain-lain</option>
            </select>
            <?= form_error('pekerjaan_wali', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>

        <hr>

        <button type="button" class="btn btn-secondary" onclick="window.location.href='<?= base_url('register/siswa'); ?>'">Kembali</button>
        <button type="submit" class="btn btn-primary">Daftar</button>
      </form>