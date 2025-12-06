<div class="container">

    <?php Flasher::flash(); ?>

    <h1 style="text-align:center;">Daftar Mahasiswa</h1>

    <a href="<?= BASEURL; ?>/mahasiswa/tambah"
       style="display:inline-block; padding:8px 12px; text-decoration:none; border-radius:4px; margin-bottom:12px;">
        + Tambah Data
    </a>

    <table border="1" cellspacing="0" cellpadding="10" width="100%">
        <thead style="text-align:left;">
            <tr>
                <th width="5%">No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Jurusan</th>
                <th width="20%">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; foreach ($data['mhs'] as $mhs): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['npm']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>"
                       style="padding:5px 10px; background:#28a745; color:white; text-decoration:none; border-radius:4px; margin-right:8px;">
                        Ubah
                    </a>

                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>"
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
