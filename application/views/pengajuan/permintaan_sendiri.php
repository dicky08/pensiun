<br><br><br>
<?= form_open_multipart('pengajuan/upload_permintaan_sendiri'); ?>
<div class="row">
	<div class="col-md-12 " style="border: 2px solid #E0FFFF;">
		<h2 class=" ml-5 mt-3">Upload File</h2>
		<div class="form-group ml-5 mr-5">
			<em>
				<div class="alert alert-warning" role="alert"><i class="fas fa-exclamation-circle"></i> Upload KARPEG,SK-CPNS,SK-PNS,SK-PANGKAT,SURAT KENAIKAN GAJI,SK-JABATAN TERAKHIR,SURAT NIKAH,AKTA KELAHIRAN,KTP SUAMI/ISTRI,KK,SK-TERAKHIR</div>
			</em>
		</div>
		<div class="form-group text-right mr-5">
			<button type="submit" name="submit" class="btn  btn-primary"><i class="fas fa-upload"></i> Upload</button>
			<a href="" name="submit" class="btn  btn-primary"><i class="fas fa-backspace"></i> Kembali</a>
		</div>
		<div class="row ml-4 mr-3 ">
			<div class="col-md-6">

				<div class="form-group">
					<label for="upload" class="mb-2">Upload Kartu Pegawai
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_kematian" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload SK CPNS
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_kematian" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload SK PNS
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_kematian" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload SK Pangkat
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_janda_duda" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload SK Terakhir
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_kematian" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload KTP Suami / Istri
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_kematian" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload Surat Nikah
						<em>
							<small class="text-danger"> jika ada ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_anak" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload Kartu Keluarga
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_photo" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

			</div>

			<div class="col-md-6">

				<div class="form-group">
					<label for="upload" class="mb-2">Upload Akta Kelahiran Anak
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_kematian" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload Kenaikan Gaji Berkala Terakhir
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_janda_duda" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload SK Jabatan Terakhir
						<em>
							<small class="text-danger"> jika ada ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_anak" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload Sasaran Kinerja Pegawai (Min 1 Th Terakhir)
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_kematian" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload Surat Kematian Sah dari Kelurahan
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_kematian" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload Surat Sah Janda / Duda dari Kepala Desa / Kelurahan
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_kematian" class="form-control">
					<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="upload" class="mb-2">Upload Surat Keterangan Kuliah Anak
						<em>
							<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
						</em></label>
					<input type="file" id="upload" name="upload_surat_kematian" class="form-control">
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

			</div>
		</div>
	</div>
</div>

</form>
