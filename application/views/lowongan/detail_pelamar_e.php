<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Detail Pelamar</a> <a href="#" class="current">Data</a> </div>
        <h1>Pelamar</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Detail</h5>
                    </div>
                    <div class="widget-content">-->
                    <!--content here-->
                    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                        <h5>Form Data Detail Pelamar</h5>
                    </div>
                    <div class="scroollme">
                        <div class="widget-content">

                            <form id="formCetak" action="<?php echo site_url('Lowongan/detail_data_excel/'); ?>" method="post">

                                <p> <button type="submit" class="btn btn-info">Cetak Excel Data Pendaftar</button>
                                    <a href="<?php echo site_url("Lowongan/detail_hired_excel/$id_lowongan"); ?>"
                                       class="btn btn-success">Cetak Excel Data Pendaftar Hired</a>
                                    <a href="<?php echo site_url("Lowongan/detail_kiv_excel/$id_lowongan"); ?>"
                                       class="btn btn-warning">Cetak Excel Data Pendaftar KIV</a>
                                    <a href="<?php echo site_url("Lowongan/detail_reject_excel/$id_lowongan"); ?>"
                                       class="btn btn-inverse">Cetak Excel Data Pendaftar Reject</a>

                                </p>
                                <table class="table table-bordered table-striped data-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pilih</th>
                                            <th>Lokasi Kantor Cabang</th>
                                            <th>Status Seleksi</th>
                                            <th>Nama Pelamar</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Nomor HP</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Status Diri</th>
                                            <th>Agama</th>
                                            <th>Tanggal Pembuatan Medical</th>
                                            <th>Tanggal Kadaluwarsa Medical</th>
                                            <th>Paspor</th>
                                            <th>Tanggal Pembuatan Paspor</th>
                                            <th>Tanggal Kadaluwarsa Paspor</th>
                                            <th>Nama Orang Tua</th>
                                            <th>Alamat Pelamar</th>
                                            <th>Kode Pos</th>
                                            <th>Nama Keluarga Lain</th>
                                            <th>Umur Keluarga Lain</th>
                                            <th>Hubungan Keluarga Lain</th>
                                            <th>Nomor HP Keluarga Lain</th>
                                            <th>Alamat Keluarga Lain</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($data as $row) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><input type="checkbox" name="id_pendaftar[]" value="<?php echo $row->id_pendaftar; ?>"</td>
                                                <td><?php echo $row->lokasi_kantor_cabang; ?></td>
                                                <td class="center"><?php echo $row->status_penerimaan; ?></td>
                                                <td class="center"><?php echo $row->nama_pelamar; ?></td>
                                                <td class="center"><?php echo $row->alamat_pelamar; ?></td>
                                                <td class="center"><?php echo $row->tanggal_lahir_pelamar; ?></td>
                                                <td class="center"><?php echo $row->jenis_kelamin; ?></td>
                                                <td class="center"><?php echo $row->nomor_hp_pelamar; ?></td>
                                                <td class="center"><?php echo $row->pendidikan_terakhir_pelamar; ?></td>
                                                <td class="center"><?php echo $row->status_diri; ?></td>
                                                <td class="center"><?php echo $row->agama; ?></td>
                                                <td class="center"><?php echo $row->tanggal_pembuatan_medical; ?></td>
                                                <td class="center"><?php echo $row->tanggal_kadaluwarsa_medical; ?></td>
                                                <td class="center"><?php echo $row->nomor_paspor; ?></td>
                                                <td class="center"><?php echo $row->tanggal_pembuatan_paspor; ?></td>
                                                <td class="center"><?php echo $row->tanggal_kadaluwarsa_paspor; ?></td>
                                                <td class="center"><?php echo $row->nama_orang_tua; ?></td>
                                                <td class="center"><?php echo $row->alamat_pelamar; ?></td>
                                                <td class="center"><?php echo $row->kode_pos; ?></td>
                                                <td class="center"><?php echo $row->nama_keluarga_lain; ?></td>
                                                <td class="center"><?php echo $row->umur_keluarga_lain; ?></td>
                                                <td class="center"><?php echo $row->hubungan_keluarga_lain; ?></td>
                                                <td class="center"><?php echo $row->nomor_hp_keluarga_lain; ?></td>
                                                <td class="center"><?php echo $row->alamat_keluarga_lain; ?></td>
                                                <td class="center">
                                                    <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Lowongan/hapus_pelamar/$row->id_pendaftar/$id_lowongan") ?>" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php $this->load->view('footer'); ?>



