	<br><br><br>
	<div class="container mt-3">
		<div class="row">
			<div class="col-md-12">
				<div class="h2 ml-4">Persyaratan Pengajuan Pensiun Permintaan Sendiri : </div>
				<ol>
					<li>Upload Photo terbaru</li>
					<li>Upload Kartu Pegawai</li>
					<li>Upload SK CPNS</li>
					<li>Upload SK PNS</li>
					<li>Upload SK Pangkat Terakhir</li>
					<li>Upload Surat Kenaikan Gaji Berkala Terakhir</li>
					<li>Upload SK Jabatan Terakhir</li>
					<li>Upload SK Terakhir ( Suami/Istri )</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="container">
		<form action="<?= site_url('upload_permintaan_sendiri') ?>" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-12" style="border: 2px solid #E0FFFF;">
					<div class="row mt-3">
						<div class="col-md-12">
							<div class="alert alert-info">PASTIKAN DATA YANG DI UPLOAD SUDAH BENAR SESUAI URUTAN! Persyaratan Pengajuan Pensiun lihat diatas!</div>

						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="upload_file" class="mb-2">Upload File Persyratan
								<em>
									<small class="text-danger"> ( *max 1 MB, Format. JPG | PNG | JPEG ) </small>
								</em>
							</label>
							<div class="form-group">
								<?= $this->session->flashdata('msgEror') ?>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<?php for ($i = 1; $i <= 4; $i++) : ?>
									<input type="file" id="upload_file" name="upload_file[]" class="form-control" required>
								<?php endfor; ?>
								<?= form_error('upload_file', '<small class="text-danger">', '</small>') ?>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<?php for ($i = 1; $i <= 4; $i++) : ?>

									<input type="file" id="upload_file" name="upload_file[]" class="form-control" required>
								<?php endfor; ?>
								<?= form_error('upload_file', '<small class="text-danger">', '</small>') ?>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group text-right">
								<button type="submit" name="submit" class="btn  btn-primary"><i class="fas fa-upload"></i> Lanjutkan Upload</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>