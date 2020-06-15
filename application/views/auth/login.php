<div class="container">
	<div class="row">
		<div class="col-md-6 mt-5 pt-2" style="border: 2px solid #E0FFFF;">
			<div class="alert alert-warning mt-2 attn" role="alert">
				Login berdasarkan <em>
					<div class="text-danger d-inline-block">Username</div>
				</em> dan <em>
					<div class="text-danger d-inline-block">Password</div>
				</em> pada saat proses awal pendaftaran!
			</div>
			<h3 style="display: inline-block; " class="mt-1 mb-4 logPegawai">Login Pegawai</h3>
			<button type="button" id="popo" class="btn btn-sm btn-warning" data-id="pop" data-toggle="popover" title="Perhatian!" data-content="Silahkan siapkan berkas - berkas sesuai prosedur untuk kelancaran pada saat pengajuan pensiun!"><i class="fas fa-exclamation-circle"></i></button>
			<?= $this->session->flashdata('msgError') ?>
			<form action="" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" placeholder="Enter Username" id="username" name="username" class="form-control" autofocus>
					<?= form_error('username', '<small class="text-danger">', '</small>') ?>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" placeholder="Enter Password" id="password" name="password" class="form-control">
					<?= form_error('password', '<small class="text-danger">', '</small>') ?>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-sign-in-alt"> Login</i></button>
					<a href="<?= site_url('register') ?>" class="btn btn-sm btn-primary"><i class="fas fa-paper-plane"> Registrasi</i></a>
				</div>
			</form>
		</div>
	</div>
</div>
<br><br><br><br>