<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?= $title; ?>
		</h1>
		<div class="box">


			<div class="box-body table-responsive pl-3">
				<table border="1" cellpadding="5" width="49%">
					<thead>
						<tr class="text-center">
							<th class="text-center">No</th>
							<th class="text-center">Tgl Pengajuan</th>
							<th class="text-center">Nip</th>
							<th class="text-center">Nama</th>
							<th class="text-center">Tgl Lahir</th>
							<th class="text-center">Kategori</th>

							<th>Status</th>

						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($data_pengajuan_all as $dpa) : ?>

							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td><?= $dpa['tgl_pengajuan']; ?></td>
								<td><?= $dpa['nip']; ?></td>
								<td style="width: 100px;"><?= $dpa['nama']; ?></td>
								<td><?= $dpa['tgl_lahir']; ?></td>
								<td style="width: 150px;"><?= $dpa['nama_kategori']; ?></td>
								<td><?= $dpa['status'] ?></td>


							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>
