<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?= $title; ?>
		</h1>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title"><?= $table; ?></h3>
				<a href="<?= site_url('cetakDataPengajuan') ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak Data Pengajuan</a>
			</div>

			<div class="box-body table-responsive pl-3">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr class="text-center">
							<th class="text-center">Action</th>
							<th class="text-center">Tgl Pengajuan</th>
							<th class="text-center">Nip</th>
							<th class="text-center">Nama</th>
							<th class="text-center">Tgl Lahir</th>
							<th class="text-center">Kategori</th>
							<th>Photo</th>
							<th>Karpeg</th>
							<th>SK CPNS</th>
							<th>SK PNS</th>
							<th>SK Pangkat Terakhir</th>
							<th>SK Gaji</th>
							<th>Jab.Terakhir</th>
							<th>SK Terakhir</th>
							<th>Sasaran Kinerja</th>
							<th>$dpa['ktp']</th>
							<th>Surat Nikah</th>
							<th>Kartu Keluarga</th>
							<th>Akta Kelahiran</th>
							<th>Surat Kuliah Anak</th>
							<th>Surat Kematian</th>
							<th>Surat Janda/Duda</th>
							<th>Status</th>

						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($data_pengajuan_all as $dpa) : ?>
							<?php
							$urlImage = '';
							if ($dpa['id_kategori'] == 1) {
								$urlImage = 'assets/img-pengajuan/janda_duda/';
							} elseif ($dpa['id_kategori'] == 2) {
								$urlImage = 'assets/img-pengajuan/batas_usia/';
							} else {
								$urlImage = 'assets/img-pengajuan/permintaan-sendiri/';
							}
							?>
							<tr class="text-center">
								<td>
									<?php if ($dpa['status'] == "proccess") : ?>
										<a class="btn btn-xs btn-info konfir" data-toggle="modal" data-target="#modal-konfirmasi" data-nip="<?= $dpa['nip']; ?>">Konfirmasi</a>
										<a href="<?= site_url('cancel') ?>" class="btn btn-xs btn-warning">Batalkan</a>
									<?php elseif ($dpa['status'] == "gagal") : ?>
										<a href="<?= site_url('cancel') ?>" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i> Hapus</a>
									<?php else : ?>
										<small class='text-success' style="font-weight: bold;">Di setujui</small>
									<?php endif; ?>
								</td>
								<td><?= $dpa['tgl_pengajuan']; ?></td>
								<td><?= $dpa['nip']; ?></td>
								<td><?= $dpa['nama']; ?></td>
								<td><?= $dpa['tgl_lahir']; ?></td>
								<td><?= $dpa['nama_kategori']; ?></td>


								<td><a href="<?= base_url($urlImage . $dpa['photo']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['photo']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['karpeg']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['karpeg']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['sk_cpns']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['sk_cpns']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['sk_pns']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['sk_pns']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['sk_pangkat_terakhir']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['sk_pangkat_terakhir']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['kenaikan_gaji_terakhir']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['kenaikan_gaji_terakhir']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['jabatan_terakhir']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['jabatan_terakhir']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['sk_terakhir']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['sk_terakhir']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['sasaran_kinerja']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['sasaran_kinerja']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['ktp']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['ktp']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['surat_nikah']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['surat_nikah']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['kartu_keluarga']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['kartu_keluarga']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['akta_kelahiran']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['akta_kelahiran']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['surat_kuliah_anak']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['surat_kuliah_anak']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['surat_kematian']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['surat_kematian']); ?>" width="80px;" height="80px"></a></td>
								<td><a href="<?= base_url($urlImage . $dpa['surat_janda_duda']); ?>" target="_blank"> <img src="<?= base_url($urlImage . $dpa['surat_janda_duda']); ?>" width="80px;" height="80px"></a></td>
								<td><?= $dpa['status'] ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>


<div class="modal fade" id="modal-konfirmasi">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Konfirmasi Pengajuan</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="nip">Nip</label>
					<input type="text" class="nip" readonly>
				</div>
				<div class="form-group">
					<label for="tgl_menikah">Tgl Menikah</label>
					<input type="date" class="form-control tgl_menikah">
				</div>
				<div class="from-group">
					<label for="jabatan">Jabatan</label>
					<input type="text" id="jabatan" class="form-control">
				</div>
				<div class="from-group">
					<label for="unit_kerja">Unit Kerja Terakhir</label>
					<input type="text" id="unit_kerja" class="form-control">
				</div>
				<div class="from-group">
					<label for="tgl_meninggal">Tgl Meninggal <em><small class="text-info">Kosongkan jika pengajuan selain Janda/Duda</em></small></label>
					<input type="date" id="tgl_meninggal " class="form-control" value="-">
				</div>
				<br>
				<label for="pangkat">Pangkat/GOLRU/TMT</label>
				<div class="row">
					<div class="col-md-6">
						<label for="pangkatLama">Lama</label>
						<div class="from-group">
							<input type="text" id="pangkatLama" class="form-control">
						</div>

					</div>
					<div class="col-md-6">
						<label for="pangkatBaru">Baru</label>
						<div class="from-group">
							<input type="text" id="pangkatBaru" class="form-control">
						</div>
					</div>
				</div>
				<br>
				<label for="pangkat">Masa Kerja Golongan ( Lama-Baru )</label>
				<div class="row">
					<div class="col-md-3">
						<label for="masa_kerjaLama">Tahun</label>
						<div class="from-group">
							<input type="text" id="masa_kerjaLama" size="4">
						</div>
					</div>
					<div class="col-md-3">
						<label for="masa_kerjaLama">Bulan</label>
						<div class="from-group">
							<input type="text" id="masa_kerjaLama" size="4">
						</div>
					</div>
					<div class="col-md-3">
						<label for="masa_kerjaLama">Tahun</label>
						<div class="from-group">
							<input type="text" id="masa_kerjaLama" size="4">
						</div>
					</div>
					<div class="col-md-3">
						<label for="masa_kerjaLama">Bulan</label>
						<div class="from-group">
							<input type="text" id="masa_kerjaLama" size="4">
						</div>
					</div>
				</div>
				<br>
				<label for="pangkat">Gaji Pokok</label>
				<div class="row">
					<div class="col-md-6">
						<label for="gp">Lama</label>
						<div class="from-group">
							<input type="text" id="gp" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<label for="gp">Baru</label>
						<div class="from-group">
							<input type="text" id="gp" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Konfirmasi</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
