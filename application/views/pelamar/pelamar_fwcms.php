<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=file.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelamar</th>
            <th>Tampat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>No.HP Pelamar</th>
            <th>Nama Orang Tua</th>
            <th>Alamat Pelamar</th>
            <th>Kode Pos</th>
            <th>Pendidikan Terakhir</th>
            <th>Status Diri</th>
            <th>Nama Keluarga Lain</th>
            <th>Umur Keluarga Lain</th>
            <th>Hubungan Keluarga Lain</th>
            <th>Alamat Keluarga Lain</th>
            <th>No.HP Keluarga Lain</th>
            <th>Minat Bekerja</th>
            <th>Minat Lokasi Bekerja</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $no = 1;
        foreach ($data as $r) {
            $row = $this->Pelamar_m->excel_fwcms($r);
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td class="center"><?php echo $row->nama_pelamar; ?></td>
                <td class="center"><?php echo $row->tempat_lahir_pelamar; ?></td>
                <td class="center"><?php echo $row->tanggal_lahir_pelamar; ?></td>
                <td class="center"><?php echo $row->jenis_kelamin; ?></td>
                <td class="center"><?php echo $row->agama; ?></td>
                <td class="center"><?php echo $row->nomor_hp_pelamar; ?></td>
                <td class="center"><?php echo $row->nama_orang_tua; ?></td>
                <td class="center"><?php echo $row->alamat_pelamar; ?></td>
                <td class="center"><?php echo $row->kode_pos; ?></td>
                <td class="center"><?php echo $row->pendidikan_terakhir_pelamar; ?></td>
                <td class="center"><?php echo $row->status_diri; ?></td>
                <td class="center"><?php echo $row->nama_keluarga_lain; ?></td>
                <td class="center"><?php echo $row->umur_keluarga_lain; ?></td>
                <td class="center"><?php echo $row->hubungan_keluarga_lain; ?></td>
                <td class="center"><?php echo $row->alamat_keluarga_lain; ?></td>
                <td class="center"><?php echo $row->nomor_hp_keluarga_lain; ?></td>
                <td class="center"><?php echo $row->minat_bekerja; ?></td>
                <td class="center"><?php echo $row->minat_lokasi_kerja; ?></td>
                <td class="center">
                    <a href="<?php echo site_url("Pelamar/form_edit_pelamar/$row->id_pelamar") ?>" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>