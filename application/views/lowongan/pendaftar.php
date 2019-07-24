<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Lowongan</a> <a href="#" class="current">Pendaftar</a> </div>
        <h1>Pendaftar Lowongan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pedaftar</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Pendaftar</h5>
                        </div>
                        <div class="widget-content">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelamar</th>
                                        <th>Tanggal Pendaftaran</th>
                                        <th>Lokasi Kantor Cabang</th>
                                        <th>Keterangan</th>
                                        <th>Status Penerimaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pendaftar as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_pelamar; ?></td>
                                            <td><?php echo $row->tanggal_pendaftaran; ?></td>
                                            <td><?php echo $row->lokasi_kantor_cabang; ?></td>
                                            <td><?php echo $row->keterangan; ?></td>
                                            <td class="center">
                                                <label>
                                                    <input type="radio" name="status_penerimaan" value="HIRED" />
                                                    HIRED</label>
                                                <label>
                                                    <input type="radio" name="status_penerimaan" value="KIV" />
                                                    KIV</label>
                                                <label>
                                                    <input type="radio" name="status_penerimaan" value="REJECT" />
                                                    REJECT</label>
                                            </td>
                                            <td class="center">
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Lowongan/hapus_data_pendaftar/$row->id_pendaftar/$id_lowongan") ?>" class="btn btn-danger">Hapus</a>
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
<?php $this->load->view('footer'); ?>
        

