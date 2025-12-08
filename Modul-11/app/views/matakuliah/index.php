<div class="container">

    <?php Flasher::flash(); ?>

    <h1 style="text-align:center;">Daftar Mata Kuliah</h1>
<hr>
    <a href="<?= BASEURL; ?>/matakuliah/tambah"
        style="display:inline-block; padding:8px 12px; background:#007bff; color:white; text-decoration:none; border-radius:4px; margin-bottom:12px;">
        + Tambah Data
    </a>


    <table border="1" cellspacing="0" cellpadding="10" width="100%">
        <thead style="text-align:left;">
            <tr>
                <th width="5%">No</th>
                <th>Kode_mk</th>
                <th>Nama_mk</th>
                <th>Semester</th>
                <th>SKS</th>
                <th width="20%">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1;
            foreach ($data['mk'] as $mk): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mk['kode_mk']; ?></td>
                    <td><?= $mk['nama_mk']; ?></td>
                    <td><?= $mk['semester']; ?></td>
                    <td><?= $mk['sks']; ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/matakuliah/ubah/<?= $mk['id']; ?>"
                            style="padding:5px 10px; background:#28a745; color:white; text-decoration:none; border-radius:4px; margin-right:8px;">
                            Ubah
                        </a>

                        <a href="<?= BASEURL; ?>/matakuliah/hapus/<?= $mk['id']; ?>"
                            onclick="return confirm('Yakin ingin menghapus?');"
                            style="padding:5px 10px; background:#dc3545; color:white; text-decoration:none; border-radius:4px;">
                            Hapus
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>