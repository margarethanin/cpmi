<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pelamar</a> <a href="#" class="current">Detail</a> </div>
        <h1>Pelamar</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pelamar</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Detail Data Pelamar</h5>
                        </div>
                        <div class="widget-content">
                            <div class="table-responsive">
                                <p> <a href="<?php echo site_url('Pelamar/form_insert_pelamar'); ?>"
                                       class="btn btn-info">Tambah Pelamar</a>
                                </p>
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
                                        $detail_pelamar = $this->Pelamar_m->select_pelamar();
                                        foreach ($detail_pelamar as $row) {
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
                                                    <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Pelamar/hapus_detail_pelamar/$row->id_pelamar") ?>" class="btn btn-danger">Hapus</a>
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



