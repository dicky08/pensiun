<div class="container"><br>
	<div class="row">
		<div class="col-md-6 mt-5 pt-3" style="border: 2px solid #E0FFFF;">
			<h3 style="display: inline-block;" class="mb-3">Pendaftaran Pegawai</h3>
			<button type="button" id="popo" class="btn btn-sm btn-warning" data-id="pop" data-toggle="popover" title="Perhatian!" data-content="Masukan data dengan benar agar proses pengajuan pensiun berjalan lancar!"><i class="fas fa-exclamation-circle"></i></button>
			<?= $this->session->flashdata('msgSukses') ?>
			<form action="" method="post">
				<div class="form-group">
					<label for="nip">NIP <em><small class="text-danger"> (18 digit)</small></em></label>
					<input type="text" id="nip" name="nip" class="form-control" placeholder="Masukan NIP" value="<?= set_value('nip'); ?>">
					<?= form_error('nip', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="nama">Nama Lengkap</label>
					<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama Lengkap" value="<?= set_value('nama'); ?>">
					<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<select name="jk" id="jk" class="form-control">
						<option value="">Jenis Kelamin</option>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>

				<div class="form-group">
					<label for="tgl_lahir">Tanggal Lahir</label>
					<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" class="form-control" placeholder="Masukan Username" value="<?= set_value('username'); ?>">
					<?= form_error('username', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="password">Password <em><small class="text-danger"> (Minimal 6 digit)</small></em></label>
					<input type="password" id="password" name="password1" class="form-control" placeholder="Masukan Password">
					<?= form_error('password1', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<label for="password2">Ulangi Password</label>
					<input type="password" id="password2" name="password2" class="form-control" placeholder="Masukan ulang Password">
					<?= form_error('password2', '<small class="text-danger">', '</small>') ?>
				</div>

				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fas fa-paper-plane"></i> Registrasi</button>
					<a href="<?= site_url('login') ?>" class="btn btn-sm btn-primary"><i class="fas fa-sign-in-alt"></i> Login</a>
				</div>
			</form>
		</div>
	</div>
</div>
<br><br>
