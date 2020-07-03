<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand logo" href="#"><img src="<?= base_url('assets/img/logo.png') ?>" alt="logo" width="200px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ml-auto">
				<?php if (!isset($sesi)) : ?>
					<a class="nav-item nav-link" href="<?= base_url('home') ?>"><i class="fas fa-home"></i> Beranda</a>
					<a class="nav-item nav-link scroll" href="<?= base_url('info') ?>"><i class="fas fa-sync"></i> Info & Syarat pengajuan</a>
					<a class="nav-item nav-link" href="<?= base_url('register') ?>"><i class="fas fa-paper-plane"></i> Registrasi</a>
					<a class="nav-item nav-link" href="<?= base_url('login') ?>"><i class="fas fa-sign-in-alt"></i> Login</a>

				<?php elseif (isset($pengajuan['nip'])) : ?>
					<a class="nav-item nav-link" href="<?= base_url('home') ?>"><i class="fas fa-home"></i> Beranda</a>
					<a class="nav-item nav-link" href="<?= base_url('info') ?>"><i class="fas fa-sync"></i> Info & Syarat pengajuan</a>
					<a class="nav-item nav-link" href="<?= base_url('lihat-pengajuan/' . $pengajuan['nip']) ?>"><i class="fas fa-paper-plane"></i> Lihat Pengajuan</a>
					<a class="nav-item nav-link" onclick="return confirm('Apakah yakin ingin logout?')" href=" <?= base_url('logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>


				<?php else : ?>
					<a class="nav-item nav-link" href="<?= base_url('home') ?>"><i class="fas fa-home"></i> Beranda</a>
					<a class="nav-item nav-link" href="<?= base_url('info') ?>"><i class="fas fa-sync"></i> Info & Syarat pengajuan</a>
					<a class="nav-item nav-link" href="<?= base_url('pegawai') ?>"><i class="fas fa-paper-plane"></i> Pengajuan Pensiun</a>
					<a class="nav-item nav-link" onclick="return confirm('Apakah yakin ingin logout?')" href=" <?= base_url('logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout
					</a>
				<?php endif;  ?>
			</div>
		</div>
	</div>
</nav>