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
            <th>ID CPMI</th>
            <th>Tampat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>No.HP Pelamar</th>
            <th>Tanggal Pembuatan Medical</th>
            <th>Tanggal Kadaluwarsa Medical</th>
            <th>Nomor Paspor</th>
            <th>Tanggal Pembuatan Paspor</th>
            <th>Tanggal Kadaluwarsa Paspor</th>
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
        </tr>
    </thead>

    <tbody>
        <?php
        $no = 1;
        foreach ($data as $r) {
            $row = $this->Pelamar_m->excel_id($r);
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td class="center"><?php echo $row->nama_pelamar; ?></td>
                <td class="center"><?php echo $row->id_cpmi; ?></td>
                <td class="center"><?php echo $row->tempat_lahir_pelamar; ?></td>
                <td class="center"><?php echo $row->tanggal_lahir_pelamar; ?></td>
                <td class="center"><?php echo $row->jenis_kelamin; ?></td>
                <td class="center"><?php echo $row->agama; ?></td>
                <td class="center"><?php echo $row->nomor_hp_pelamar; ?></td>
                <td class="center"><?php echo $row->tanggal_pembuatan_medical; ?></td>
                <td class="center"><?php echo $row->tanggal_kadaluwarsa_medical; ?></td>
                <td class="center"><?php echo $row->nomor_paspor; ?></td>
                <td class="center"><?php echo $row->tanggal_pembuatan_paspor; ?></td>
                <td class="center"><?php echo $row->tanggal_kadaluwarsa_paspor; ?></td>
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

            </tr>
        <?php } ?>
    </tbody>
</table>