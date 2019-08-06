<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Keberangkatan</a> <a href="#" class="current">Lowongan</a> </div>
        <h1>Data Keberangkatan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Keberangkatan Lowongan</h5>
                    </div>
                    <div class="widget-content">
                        
                        <p> <a href="<?php echo site_url('Endorsement/data_keberangkatan_pelamar'); ?>"
                               class="btn btn-info">Daftar Pelamar Berangkat</a>
                        </p>

                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Lowongan</h5>
                        </div>
                        <div class="widget-content">


                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Lokasi Perusahaan</th>
                                        <th>Jenis Pekerjaan</th>
                                        <th>Permintaan Lowongan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;

                                    foreach ($lowongan as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_perusahaan; ?></td>
                                            <td><?php echo $row->lokasi; ?></td>
                                            <td><?php echo $row->pekerjaan; ?></td>
                                            <td><?php echo $row->permintaan_lowongan; ?></td>
                                            <td class="center">
                                                <a class="btn" href="<?php echo site_url("Lowongan/pendaftar/$row->id_lowongan") ?>">Lihat Pendaftar</a>
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
        
