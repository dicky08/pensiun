<div class="container">
	<br><br><br>
	<form action="<?= site_url('pengajuan/ajax_upload') ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12 mt-5" style="border: 2px solid #E0FFFF;">
				<h2 class="mt-3">Upload File</h2>
				<div class="tampil"></div>
				<div class="form-group mb-3">
					<em>
						<div class="alert alert-warning" role="alert"><i class="fas fa-exclamation-circle"></i> Upload KARPEG, SK-CPNS, SK-PNS, SK-PANGKAT TERAKHIR, SURAT KENAIKAN GAJI, SK-JABATAN TERAKHIR, SK TERAKHIR, SURAT NIKAH,AKTA KELAHIRAN, KTP SUAMI/ISTRI, KK, SK-TERAKHIR</div>
					</em>
				</div>
				<div class="form-group">
					<?= $this->session->flashdata('msgEror') ?>
				</div>
				<div class="form-group">
					<?php for ($i = 1; $i <= 2; $i++) : ?>
						<label for="upload_file" class="mb-2">Upload File KTp
							<em>
								<small class="text-danger"> ( *max 2 MB, Format.PDF ) Jadikan dalam 1 File pada keterangan diatas.</small>
							</em></label>
						<input type="file" id="upload_file" name="upload<?= $i; ?>" class="form-control" value="<?= set_value('upload_file') ?>">
					<?php endfor; ?>
					<?= form_error('upload_file', '<small class="text-danger">', '</small>') ?>
				</div>




				<div class="form-group text-right mr-5">
					<button type="submit" name="submit" class="btn  btn-primary"><i class="fas fa-upload"></i> Upload</button>
					<a href="" name="submit" class="btn  btn-primary"><i class="fas fa-backspace"></i> Oke</a>
				</div>


			</div>


		</div>
	</form>

</div>
