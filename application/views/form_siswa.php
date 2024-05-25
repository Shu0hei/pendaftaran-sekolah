<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Siswa</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('siswa/submit'); ?>

    <h5>Nama Panggilan</h5>
    <input type="text" name="nama_panggilan" value="<?php echo set_value('nama_panggilan'); ?>" />

    <h5>Nama Lengkap</h5>
    <input type="text" name="nama_lengkap" value="<?php echo set_value('nama_lengkap'); ?>" />

    <h5>Email</h5>
    <input type="text" name="email" value="<?php echo set_value('email'); ?>" />

    <h5>Jenis Kelamin</h5>
    <select name="jenis_kelamin">
        <option value="Laki-laki" <?php echo set_select('jenis_kelamin', 'Laki-laki'); ?>>Laki-laki</option>
        <option value="Perempuan" <?php echo set_select('jenis_kelamin', 'Perempuan'); ?>>Perempuan</option>
    </select>

    <h5>Tempat Lahir</h5>
    <input type="text" name="tempat_lahir" value="<?php echo set_value('tempat_lahir'); ?>" />

    <h5>Tanggal Lahir</h5>
    <input type="date" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir'); ?>" />

    <h5>Agama</h5>
    <input type="text" name="agama" value="<?php echo set_value('agama'); ?>" />

    <h5>Kewarganegaraan</h5>
    <input type="text" name="kewarganegaraan" value="<?php echo set_value('kewarganegaraan'); ?>" />

    <h5>Anak Keberapa</h5>
    <input type="number" name="anak_keberapa" value="<?php echo set_value('anak_keberapa'); ?>" />

    <h5>Berkebutuhan Khusus</h5>
    <select name="berkebutuhan_khusus">
        <option value="Ya" <?php echo set_select('berkebutuhan_khusus', 'Ya'); ?>>Ya</option>
        <option value="Tidak" <?php echo set_select('berkebutuhan_khusus', 'Tidak'); ?>>Tidak</option>
    </select>

    <h5>Alamat Jalan</h5>
    <textarea name="alamat_jalan"><?php echo set_value('alamat_jalan'); ?></textarea>

    <h5>RT</h5>
    <input type="text" name="rt" value="<?php echo set_value('rt'); ?>" />

    <h5>RW</h5>
    <input type="text" name="rw" value="<?php echo set_value('rw'); ?>" />

    <h5>Desa</h5>
    <input type="text" name="desa" value="<?php echo set_value('desa'); ?>" />

    <h5>Kelurahan</h5>
    <input type="text" name="kelurahan" value="<?php echo set_value('kelurahan'); ?>" />

    <h5>Kecamatan</h5>
    <input type="text" name="kecamatan" value="<?php echo set_value('kecamatan'); ?>" />

    <h5>Kode Pos</h5>
    <input type="text" name="kode_pos" value="<?php echo set_value('kode_pos'); ?>" />

    <h5>Tempat Tinggal</h5>
    <input type="text" name="tempat_tinggal" value="<?php echo set_value('tempat_tinggal'); ?>" />

    <h5>Mode Transportasi</h5>
    <input type="text" name="mode_transportasi" value="<?php echo set_value('mode_transportasi'); ?>" />

    <h5>Asal Sekolah</h5>
    <input type="text" name="asal_sekolah" value="<?php echo set_value('asal_sekolah'); ?>" />

    <h5>Alamat Sekolah</h5>
    <textarea name="alamat_sekolah"><?php echo set_value('alamat_sekolah'); ?></textarea>

    <div><input type="submit" value="Daftar" /></div>

</form>

</body>
</html>
