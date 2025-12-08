<div align="center">
    <h1><?= $data['judul']; ?></h1>
</div>

<div style="max-width:520px; margin:auto; border:1px solid #ccc; padding:20px; border-radius:8px;">

    <form action="<?= BASEURL; ?>/matakuliah/<?= $data['aksi']; ?>" method="post">

        <?php if (isset($data['mk']['id'])): ?>
            <input type="hidden" name="id" value="<?= $data['mk']['id']; ?>">
        <?php endif; ?>

        <table width="100%" cellpadding="8" cellspacing="0">

            <tr>
                <td width="30%"><b>Kode_mk</b></td>
                <td>
                    <input type="text" name="kode_mk"
                        value="<?= $data['mk']['kode_mk'] ?? '' ?>"
                        style="width:100%; padding:8px;" required>
                </td>
            </tr>

            <tr>
                <td><b>Nama_mk</b></td>
                <td>
                    <input type="text" name="nama_mk"
                        value="<?= $data['mk']['nama_mk'] ?? '' ?>"
                        style="width:100%; padding:8px;" required>
                </td>
            </tr>

            <tr>
                <td><b>Semester</b></td>
                <td>
                    <?php $s = $data['mk']['semester'] ?? ''; ?>
                    <select name="semester"
                        style="width:100%; padding:8px; box-sizing:border-box;">
                        <?php for ($i = 1; $i <= 8; $i++): ?>
                            <option value="<?= $i ?>" <?= ($s == $i) ? 'selected' : '' ?>>
                                Semester <?= $i ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td><b>SKS</b></td>
                <td>
                    <?php $sks = $data['mk']['sks'] ?? ''; ?>
                    <select name="sks"
                        style="width:100%; padding:8px; box-sizing:border-box;">
                        <?php for ($i = 1; $i <= 6; $i++): ?>
                            <option value="<?= $i ?>" <?= ($sks == $i ? 'selected' : '') ?>>
                                <?= $i ?> SKS
                            </option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>

        </table>

        <div align="right" style="margin-top:15px;">
            <a href="<?= BASEURL; ?>/matakuliah"
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