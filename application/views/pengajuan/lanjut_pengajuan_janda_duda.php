<br><br><br>
<div class="container mt-3">
	<div class="row">
		<div class="col-md-12">
			<div class="h2">Persyaratan Pengajuan Pensiun Janda Duda: </div>
			<div class="form-group">
				<p>9. Upload Sasaran Kinerja Pegawai</p>
				<p>10. Upload KTP Suami/Istri</p>
				<p>11. Upload Surat Nikah</p>
				<p>12. Upload Kartu Keluarga</p>
				<p>13. Upload Akta Kelahiran</p>
				<p>14. Upload Surat Kuliah Anak</p>
				<p>15. Upload Kematian dari kelurahan</p>
				<p>16. Upload Sah Janda/Duda dari kelurahan</p>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<form action="<?= site_url('upload_lanjut_pengajuan_janda') ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12" style="border: 2px solid #E0FFFF;">
				<div class="row mt-3">
					<div class="col-md-12">
						<div class="alert alert-info" style="letter-spacing: 2;"> 1 Langkah lagi Proses Upload!</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<label for="upload_file" class="mb-2">Upload File Persyratan Lanjutan
							<em>
								<small class="text-danger"> ( *max 1 MB, Format. JPG | PNG | JPEG ) </small>
							</em>
						</label>
						<div class="form-group">
							<?= $this->session->flashdata('msgEror') ?>
							<?= $this->session->flashdata('msgOke') ?>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<input type="hidden" name="nip" value="<?= $nip['nip']; ?>">
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
							<button type="submit" name="submit" class="btn  btn-primary"><i class="fas fa-upload"></i> Upload</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>