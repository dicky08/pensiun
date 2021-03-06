<br><br><br>
<div class="col">
	<div class="row mt-4">
		<div class="col-md-3">
			<h5>Tgl Pengajuan : <b><?= $tglPengajuan; ?></b></h5>
			<h5>Nama : <b><?= $nama; ?></b></h5>
			<h5>Nip : <b><?= $nip; ?></b></h5>

			<?php switch ($idKategori) {

				case 1: ?>
					<h6 class="alert alert-success">Kategori : <?= ucwords($kategori) ?></h6>
				<?php break;

				case 2: ?>
					<h6 class="alert alert-warning">Kategori : <?= ucwords($kategori) ?></h6>
				<?php break;

				default: ?>
					<h6 class="alert alert-info">Kategori : <?= ucwords($kategori) ?></h6>
			<?php break;
			} ?>
		</div>

	</div>
	<div class="row">
		<div class="col-md-9">
			<?= $this->session->flashdata('msgOke'); ?>
		</div>
	</div>


	<div class="row">
		<table class="table table-responsive table-bordered">
			<thead class="">
				<tr>
					<th>No</th>

					<th>Photo</th>
					<th>Karpeg</th>
					<th>SK CPNS</th>
					<th>SK PNS</th>
					<th>SK Pangkat Terakhir</th>
					<th>SK Gaji</th>
					<th>Jab.Terakhir</th>
					<th>SK Terakhir</th>
					<th>Sasaran Kinerja</th>
					<th>KTP</th>
					<th>Surat Nikah</th>
					<th>Kartu Keluarga</th>
					<th>Akta Kelahiran</th>
					<th>Surat Kuliah Anak</th>
					<th>Surat Kematian</th>
					<th>Surat Janda/Duda</th>

				</tr>
			</thead>
			<tbod>

				<tr>
					<td>1</td>
					<td><a href="<?= base_url($urlImage . $photo); ?>" target="_blank"> <img src="<?= base_url($urlImage . $photo); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $karpeg); ?>" target="_blank"> <img src="<?= base_url($urlImage . $karpeg); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $sk_cpns); ?>" target="_blank"> <img src="<?= base_url($urlImage . $sk_cpns); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $sk_pns); ?>" target="_blank"> <img src="<?= base_url($urlImage . $sk_pns); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $sk_pangkat_terakhir); ?>" target="_blank"> <img src="<?= base_url($urlImage . $sk_pangkat_terakhir); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $kenaikan_gaji_terakhir); ?>" target="_blank"> <img src="<?= base_url($urlImage . $kenaikan_gaji_terakhir); ?>" width="80px;" height="80px"></a></td>

					<td><a href="<?= base_url($urlImage . $jabatan_terakhir); ?>" target="_blank"> <img src="<?= base_url($urlImage . $jabatan_terakhir); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $sk_terakhir); ?>" target="_blank"> <img src="<?= base_url($urlImage . $sk_terakhir); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $sasaran_kinerja); ?>" target="_blank"> <img src="<?= base_url($urlImage . $sasaran_kinerja); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $ktp); ?>" target="_blank"> <img src="<?= base_url($urlImage . $ktp); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $surat_nikah); ?>" target="_blank"> <img src="<?= base_url($urlImage . $surat_nikah); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $kartu_keluarga); ?>" target="_blank"> <img src="<?= base_url($urlImage . $kartu_keluarga); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $akta_kelahiran); ?>" target="_blank"> <img src="<?= base_url($urlImage . $akta_kelahiran); ?>" width="80px;" height="80px"></a></td>

					<td><a href="<?= base_url($urlImage . $surat_kuliah_anak); ?>" target="_blank"> <img src="<?= base_url($urlImage . $surat_kuliah_anak); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $surat_kematian); ?>" target="_blank"> <img src="<?= base_url($urlImage . $surat_kematian); ?>" width="80px;" height="80px"></a></td>
					<td><a href="<?= base_url($urlImage . $surat_janda_duda); ?>" target="_blank"> <img src="<?= base_url($urlImage . $surat_janda_duda); ?>" width="80px;" height="80px"></a></td>
				</tr>
			</tbod>
		</table>
	</div>
</div>
<div class="form-group" style="margin-left: 20px">
	<?php if ($status == "proccess") : ?>
		<div class="container">
			<div class="alert alert-info text-center">Menunggu Konfirmasi</div>
		</div>
	<?php elseif ($status == "gagal") : ?>
		<div class="container">
			<div style="text-align: center; font-size: 24px; letter-spacing: 1px;" class="alert alert-danger">Mohon Maaf Pengajuan anda gagal! Silahkan lakukan pengajuan sesuai dengan peraturan yang tertulis.</div>
		</div>
	<?php else : ?>
		<a href="<?= site_url('pengajuan/cetakSKPensiun'); ?>" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak SK</a>
	<?php endif; ?>
</div>
<br><br><br><br><br><br>
