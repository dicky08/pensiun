<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title; ?>
        </h1>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Table Pegawai</h3>
            </div>

            <div class="box-body table-responsive pl-3">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th class="text-center">No</th>
                            <th class="text-center">NIP</th>
                            <th class="text-center">NAMA</th>
                            <th class="text-center">TANGGAL LAHIR</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data_pegawai as $dp) : ?>
                            <tr class="text-center">
                                <td><?= $no++; ?></td>
                                <td><?= $dp['nip']; ?></td>
                                <td><?= $dp['nama']; ?></td>
                                <td><?= $dp['tgl_lahir']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>