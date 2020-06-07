<div class="container">
	<div class="row">
		<div class="col-md-6 mt-5" style="border: 2px solid #E0FFFF;">
			<div class="alert alert-warning mt-2 attn" role="alert">
				Login berdasarkan NIP dan tanggal lahir! <br><small class="text-danger"> Format(YYYY-mm-dd)</small>
				<small class="text-danger">*Contoh : 1992-12-30</small>
			</div>
			<h3 style="display: inline-block; " class="mt-1 mb-4 logPegawai">Login Pegawai</h3>
			<button type="button" id="popo" class="btn btn-sm btn-warning" data-id="pop" data-toggle="popover" title="Perhatian!" data-content="Silahkan siapkan berkas - berkas sesuai prosedur untuk kelancaran pada saat pengajuan pensiun!">!</button>
			<form action="" method="post">
				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" placeholder="Enter NIP" id="nip" name="nip" class="form-control">
					<?= form_error('nip', '<small class="text-danger">', '</small>') ?>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" placeholder="Enter Password" id="password" name="password" class="form-control">
					<?= form_error('password', '<small class="text-danger">', '</small>') ?>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-sign-in-alt"> Login</i></button>
				</div>
			</form>
		</div>
	</div>
</div>
