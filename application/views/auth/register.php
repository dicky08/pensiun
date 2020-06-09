<div class="container mt-5">
	<div class="row">
		<div class="col-md-6">
			<h3 style="display: inline-block;">Pendaftaran Pegawai</h3>
			<button type="button" id="popo" class="btn btn-sm btn-warning" data-id="pop" data-toggle="popover" title="Perhatian!" data-content="Silahkan siapkan berkas - berkas sesuai prosedur untuk kelancaran pada saat pengajuan pensiun!">!</button>
			<form action="" method="post">
				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" id="nip" name="nip" class="form-control" placeholder="Masukan NIP" value="<?= set_value('nip'); ?>">
					<?= form_error('nip', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama Lengkap" value="<?= set_value('nama'); ?>">
					<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" class="form-control" placeholder="Masukan Username" value="<?= set_value('username'); ?>">
					<?= form_error('username', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password">
					<?= form_error('password', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="password2">Ulangi Password</label>
					<input type="password" id="password2" name="password2" class="form-control" placeholder="Masukan ulang Password">
					<?= form_error('password2', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fas fa-paper-plane"></i> Registrasi</button>
				</div>
			</form>
		</div>
	</div>
</div>