	<div class="container mt-5">
		<?php if ($pesan == "gagal") : ?>
			<?php echo "<div class='container alert alert-danger' role='alert'>
		Mohon maaf Pengajuan belum bisa dilakukan! Pengajuan bisa dilakukan terhitung sebelum 6 bulan atau kurang, dimulai dari Tanggal Lahir.
		<a href='" . base_url() . "home" . "'>Beranda</a>
		</div>" ?>
		<?php else : ?>
			<div class='container alert alert-warning' role='alert'>
				<div>Silahkan pilih jenis Pengajuan Pensiun!</div>
			</div>
		<?php endif; ?>
		<h2 class="text-center mb-4">Kategori Pensiun</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="<?= base_url('assets/img/duda2.jpg') ?>" class="card-img-top" alt="pengajuan">
					<div class="card-body">
						<h5 class="card-title">Janda / Duda</h5>
						<p class="card-text">Pengajuan Pensiun ini hanya berlaku jika Pegawai dinyatakan meninggal.</p>
						<?php if ($pesan == "gagal") : ?>
						<?php else : ?>
							<a href="<?= site_url('janda_duda'); ?>" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Ajukan</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="<?= base_url('assets/img/bup2.jpg') ?>" class="card-img-top" alt="pengajuan">
					<div class="card-body">
						<h5 class="card-title">Batas Usia Pensiun</h5>
						<p class="card-text">Batas Usia Pensiun Pengajuan dimulai ketika sudah memasuki umur 60th.</p>
						<?php if ($pesan == "gagal") : ?>
						<?php else : ?>
							<a href="<?= site_url('batas_usia'); ?>" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Ajukan</a>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<img src="<?= base_url('assets/img/self.jpg') ?>" class="card-img-top" alt="pengajuan">
					<div class="card-body">
						<h5 class="card-title">Permintaan Sendiri</h5>
						<p class="card-text">Pengajuan Pensiun ini bisa dilakukan ketika masa kerja diatas dari 30 th.</p>

						<?php if ($pesan == "gagal") : ?>
						<?php else : ?>
							<a href="<?= base_url('permintaan_sendiri') ?>" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Ajukan</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
