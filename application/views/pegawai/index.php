<?php if ($pesan == "gagal") : ?>
	<?php echo "<div class='container alert alert-danger' role='alert'>
		Mohon maaf Pengajuan belum bisa dilakukan! Pengajuan bisa dilakukan terhitung sebelum 6 bulan atau kurang, dimulai dari Tanggal Lahir.
		<a href='" . base_url() . "home" . "'>Beranda</a>
	</div>" ?>
<?php else : ?>
	<div class="container mt-5">
		<div class='container alert alert-warning' role='alert'>
			<div>Silahkan pilih jenis Pengajuan Pensiun!</div>
		</div>
		<h2 class="text-center mb-4">Kategori Pensiun</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="<?= base_url('assets/img/self.jpg') ?>" class="card-img-top" alt="pengajuan">
					<div class="card-body">
						<h5 class="card-title">Permintaan Sendiri</h5>
						<p class="card-text">Pengajuan Pensiun ini bisa dilakukan ketika masa kerja diatas dari 30 th.</p>
						<a href="<?= base_url('upload-pengajuan') ?>" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Ajukan</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="<?= base_url('assets/img/bup2.jpg') ?>" class="card-img-top" alt="pengajuan">
					<div class="card-body">
						<h5 class="card-title">Batas Usia Pensiun</h5>
						<p class="card-text">Batas Usia Pensiun Pengajuan dimulai ketika sudah memasuki umur 60th.</p>
						<a href="#" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Ajukan</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="<?= base_url('assets/img/duda2.jpg') ?>" class="card-img-top" alt="pengajuan">
					<div class="card-body">
						<h5 class="card-title">Janda / Duda</h5>
						<p class="card-text">Pengajuan Pensiun ini hanya berlaku jika Pegawai dinyatakan meninggal.</p>
						<a href="#" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Ajukan</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
