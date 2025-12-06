<div align="center">
    <h1><?= $data['judul']; ?></h1>
</div>

<div style="max-width:520px; margin:auto; border:1px solid #ccc; padding:20px; border-radius:8px;">

    <form action="<?= BASEURL; ?>/mahasiswa/<?= $data['aksi']; ?>" method="post">

        <?php if (isset($data['mhs']['id'])): ?>
            <input type="hidden" name="id" value="<?= $data['mhs']['id']; ?>">
        <?php endif; ?>

        <table width="100%" cellpadding="8" cellspacing="0">

            <tr>
                <td width="30%"><b>Nama</b></td>
                <td>
                    <input type="text" name="nama"
                        value="<?= $data['mhs']['nama'] ?? '' ?>"
                        style="width:100%; padding:8px;" required>
                </td>
            </tr>

            <tr>
                <td><b>NPM</b></td>
                <td>
                    <input type="text" name="npm"
                        value="<?= $data['mhs']['npm'] ?? '' ?>"
                        style="width:100%; padding:8px;" required>
                </td>
            </tr>

            <tr>
                <td><b>Email</b></td>
                <td>
                    <input type="email" name="email"
                        value="<?= $data['mhs']['email'] ?? '' ?>"
                        style="width:100%; padding:8px;">
                </td>
            </tr>

            <tr>
                <td><b>Jurusan</b></td>
                <td>
                    <?php $j = $data['mhs']['jurusan'] ?? ''; ?>
                    <select name="jurusan" style="width:100%; padding:8px;">
                        <option value="Teknik Informatika" <?= $j == 'Teknik Informatika' ? 'selected' : ''; ?>>Teknik Informatika</option>
                        <option value="Sistem Informasi" <?= $j == 'Sistem Informasi' ? 'selected' : ''; ?>>Sistem Informasi</option>
                        <option value="Teknik Industri" <?= $j == 'Teknik Industri' ? 'selected' : ''; ?>>Teknik Industri</option>
                    </select>
                </td>
            </tr>

        </table>

        <div align="right" style="margin-top:15px;">
            <a href="<?= BASEURL; ?>/mahasiswa"
                style="padding:7px 14px; background:#555; color:white; text-decoration:none; border-radius:4px; margin-right:8px;">
                Kembali
            </a>

            <button type="submit"
                style="padding:7px 14px; background:#007bff; color:white; border:none; border-radius:4px;">
                Simpan Data
            </button>
        </div>

    </form>

</div>