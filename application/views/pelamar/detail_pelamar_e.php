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
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Detail</h5>
                    </div>
                    <div class="widget-content">
                        <p> <a href="<?php echo site_url("Pelamar/detail_pelamar_excel/$id_pelamar"); ?>"
                               class="btn btn-info">Cetak Excel</a>
                        </p>
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Detail Pelamar</h5>
                        </div>
                        <div class="scroollme">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Lokasi Kantor Cabang</th>
                                            <th>Lokasi Seleksi</th>
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
                                                <td>1</td>
                                                <td><?php echo $row->nama_perusahaan; ?></td>
                                                <td><?php echo $row->lokasi_kantor_cabang; ?></td>
                                                <td><?php echo $row->lokasi_seleksi; ?></td>
                                                <td class="center"><?php echo $row->status_penerimaan; ?></td>
                                                <td class="center">Budi Setiawan</td>
                                                <td class="center">Bantul</td>
                                                <td class="center">23 Mei 1990</td>
                                                <td class="center">Laki-Laki</td>
                                                <td class="center">081234567</td>
                                                <td class="center">SMK</td>
                                                <td class="center">Belum Menikah</td>
                                                <td class="center">Islam</td>
                                                <td class="center">13 Mei 2019</td>
                                                <td class="center">13 Juli 2019</td>
                                                <td class="center">AT 8935</td>
                                                <td class="center">15 Mei 2019</td>
                                                <td class="center">15 Mei 2023</td>
                                                <td class="center">Sulistyo</td>
                                                <td class="center">JL. Bantul, Srandakan RT02 RW01, Bantul</td>
                                                <td class="center">57116</td>
                                                <td class="center">Sulistyo</td>
                                                <td class="center">62</td>
                                                <td class="center">Ayah</td>
                                                <td class="center">0864521356</td>
                                                <td class="center">JL. Bantul, Srandakan RT02 RW01, Bantul</td>
                                                <td class="center">
                                                    <button class="btn btn-primary">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>



