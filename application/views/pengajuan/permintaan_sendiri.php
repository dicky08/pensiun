<div class="container">
	<br><br><br>
	<?= form_open_multipart('pengajuan/upload_permintaan_sendiri'); ?>
	<div class="row">
		<div class="col-md-12 mt-5" style="border: 2px solid #E0FFFF;">
			<h2 class="mt-3">Upload File</h2>
			<div class="form-group mb-3">
				<em>
					<div class="alert alert-warning" role="alert"><i class="fas fa-exclamation-circle"></i> Upload KARPEG, SK-CPNS, SK-PNS, SK-PANGKAT TERAKHIR, SURAT KENAIKAN GAJI, SK-JABATAN TERAKHIR, SK TERAKHIR, SURAT NIKAH,AKTA KELAHIRAN, KTP SUAMI/ISTRI, KK, SK-TERAKHIR</div>
				</em>
			</div>

			<div class="form-group">
				<label for="upload_file" class="mb-2">Upload File
					<em>
						<small class="text-danger"> ( *max 2 MB, Format.PDF ) Jadikan dalam 1 File pada keterangan diatas.</small>
					</em></label>
				<input type="file" id="upload_file" name="upload_file" class="form-control">
				<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
			</div>

			<div class="form-group">
				<label for="upload" class="mb-2">Photo
					<em>
						<small class="text-danger"> ( *max 1 MB, Format.JPG )</small>
					</em></label>
				<input type="file" id="upload" name="upload_photo" class="form-control">
				<?= form_error('upload_photo', '<small class="text-danger">', '</small>') ?>
			</div>
			<div class="form-group text-right mr-5">
				<button type="submit" name="submit" class="btn  btn-primary"><i class="fas fa-upload"></i> Upload</button>
				<a href="" name="submit" class="btn  btn-primary"><i class="fas fa-backspace"></i> Kembali</a>
			</div>
		</div>


	</div>
	</form>

</div>
