<div class="container mt-5">
	<div class="row">
		<div class="col-md-6">
			<?= form_open_multipart('pengajuan/upload_permintaan_sendiri'); ?>
			<div class="form-group">
				<em>
					<div class="alert alert-warning" role="alert"><i class="fas fa-exclamation-circle"></i> SCAN KARPEG,SK-CPNS,SK-PNS,SK-PANGKAT,SURAT KENAIKAN GAJI,SK-JABATAN TERAKHIR,SURAT NIKAH,AKTA KELAHIRAN,KTP SUAMI/ISTRI,KK,SK-TERAKHIR</div>
				</em>
				<label for="upload" class="mb-2">Upload File
					<em>
						<?= $this->session->flashdata('msgEror') ?>
						<small class="text-danger"> Satukan file diatas menjadi( *max 2 MB, Format.PDF )</small>
					</em></label>
				<input type="file" id="upload" name="upload_file" class="form-control">
			</div>

			<div class="form-group">
				<label for="upload" class="mb-2">Upload Surat Kematian
					<em>
						<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
					</em></label>
				<input type="file" id="upload" name="upload_surat_kematian" class="form-control">
				<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
			</div>

			<div class="form-group">
				<label for="upload" class="mb-2">Upload Surat Janda Duda
					<em>
						<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
					</em></label>
				<input type="file" id="upload" name="upload_surat_janda_duda" class="form-control">
				<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
			</div>

			<div class="form-group">
				<label for="upload" class="mb-2">Upload Surat Kuliah Anak
					<em>
						<small class="text-danger"> jika ada ( *max 1 MB, Format.JPG )</small>
					</em></label>
				<input type="file" id="upload" name="upload_surat_anak" class="form-control">
				<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
			</div>

			<div class="form-group">
				<label for="upload" class="mb-2">Upload Photo
					<em>
						<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
					</em></label>
				<input type="file" id="upload" name="upload_photo" class="form-control">
				<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fas fa-upload"></i> Upload</button>
				<button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fas fa-backspace"></i> Kembali</button>
			</div>
			</form>
		</div>
	</div>
</div>
