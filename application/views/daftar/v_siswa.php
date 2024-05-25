<body class="bg-light">
    
<div class="container">
  <div class="py-5 text-center"></div>
    <div class="col-md order-md-1">
      <h4 class="mb-3 text-center">Data Siswa</h4>
      
      <hr>

      <form method="post" action="<?= base_url().'register/siswa';?>" class="needs-validation" novalidate  enctype="multipart/form-data"> 
        <!-- DATA AYAH -->
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="nama_panggilan">Nama Panggilan</label>
            <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" value="<?= set_value('nama_panggilan'); ?>" required>
            <?= form_error('nama_panggilan', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-3 mb-3">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap'); ?>" required>
            <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-3 mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" required>
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-3 mb-3">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="custom-select d-block w-100" id="jenis_kelamin" name="jenis_kelamin" required>
              <option value="">Pilih...</option>
              <option value="Laki-laki" <?= set_select('jenis_kelamin', 'Laki-laki'); ?>>Laki-laki</option>
              <option value="Perempuan" <?= set_select('jenis_kelamin', 'Perempuan'); ?>>Perempuan</option>
            </select>
            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= set_value('tempat_lahir'); ?>" required>
            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="" value="<?= set_value('tanggal_lahir'); ?>" required>
            <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="agama">Agama</label>
            <select class="custom-select d-block w-100" id="agama" name="agama" required>
              <option value="">Pilih...</option>
              <option value="Islam" <?= set_select('agama', 'Islam'); ?>>Islam</option>
              <option value="Kristen" <?= set_select('agama', 'Kristen'); ?>>Kristen</option>
              <option value="Katolik" <?= set_select('agama', 'Katolik'); ?>>Katolik</option>
              <option value="Protestan" <?= set_select('agama', 'Protestan'); ?>>Protestan</option>
              <option value="Hindu" <?= set_select('agama', 'Hindu'); ?>>Hindu</option>
              <option value="Buddha" <?= set_select('agama', 'Buddha'); ?>>Buddha</option>
              <option value="Khonghucu" <?= set_select('agama', 'Khonghucu'); ?>>Khonghucu</option>
            </select>
            <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="kewarganegaraan">Kewarganegaraan</label>
            <select class="custom-select d-block w-100" id="kewarganegaraan" name="kewarganegaraan" required>
              <option value="">Pilih...</option>
              <option value="Warga Negara Indonesia" <?= set_select('kewarganegaraan', 'Warga Negara Indonesia'); ?>>Warga Negara Indonesia</option>
              <option value="Warga Negara Asing" <?= set_select('kewarganegaraan', 'Warga Negara Asing'); ?>>Warga Negara Asing</option>
            </select>
            <?= form_error('kewarganegaraan', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="rt">RT</label>
            <input type="text" class="form-control" id="rt" name="rt" placeholder="" value="<?= set_value('rt'); ?>" required>
            <?= form_error('rt', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-3 mb-3">
            <label for="rw">RW</label>
            <input type="text" class="form-control" id="rw" name="rw" placeholder="" value="<?= set_value('rw'); ?>" required>
            <?= form_error('rw', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-3 mb-3">
            <label for="desa_kelurahan">Desa/Kelurahan</label>
            <input type="text" class="form-control" id="desa_kelurahan" name="desa_kelurahan" placeholder="" value="<?= set_value('desa_kelurahan'); ?>" required>
            <?= form_error('desa_kelurahan', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-3 mb-3">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="" value="<?= set_value('kecamatan'); ?>" required>
            <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="alamat_jalan">Alamat Jalan</label>
            <input type="text" class="form-control" id="alamat_jalan" name="alamat_jalan" placeholder="" value="<?= set_value('alamat_jalan'); ?>" required>
            <?= form_error('alamat_jalan', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-4 mb-3">
            <label for="kode_pos">Kode Pos</label>
            <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="" value="<?= set_value('kode_pos'); ?>" required>
            <?= form_error('kode_pos', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-4 mb-3">
            <label for="mode_transportasi">Mode Transportasi</label>
            <input type="text" class="form-control" id="mode_transportasi" name="mode_transportasi" placeholder="" value="<?= set_value('mode_transportasi'); ?>" required>
            <?= form_error('mode_transportasi', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="asal_sekolah">Asal Sekolah TK</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="" value="<?= set_value('asal_sekolah'); ?>" required>
            <?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="col-md-6 mb-3">
            <label for="alamat_sekolah">Alamat Sekolah TK</label>
            <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" placeholder="" value="<?= set_value('alamat_sekolah'); ?>" required>
            <?= form_error('alamat_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>

        <hr>

        <button type="button" class="btn btn-secondary" onclick="window.location.href='<?= base_url('register'); ?>'">Batal</button>
        <button type="submit" class="btn btn-primary">Lanjut</button>
      </form>