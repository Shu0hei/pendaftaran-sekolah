<body class="text-center d-flex align-items-center justify-content-center vh-100">
  <form class="form-signin" action="<?= base_url().'register/process_login';?>" method="post">
    <?php if (isset($error_message)) { ?>
        <div class="error-message"><?php echo $error_message; ?></div>
    <?php } ?>
    <label for="email" class="sr-only">Email address</label>
    <input type="email" name="email" id="email" class="form-control mb-2" placeholder="Email address" required autofocus>
    <label for="tanggal_lahir" class="sr-only">Password</label>
    <input type="password" id="tanggal_lahir" name="tanggal_lahir" class="form-control mb-3" placeholder="Tahun-Bulan-Tanggal" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    <button class="btn btn-lg btn-success btn-block" type="submit" 
    onclick="window.location.href='<?= base_url('register/siswa'); ?>'">Daftar</button>
  </form>