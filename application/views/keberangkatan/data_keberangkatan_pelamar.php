<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Keberangkatan</a> <a href="#" class="current">Pelamar</a> </div>
        <h1>Data Keberangkatan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Keberangkatan Pelamar</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Pelamar</h5>
                        </div>
                        <div class="widget-content">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelamar</th>
<!--                                        <th>Tanggal Seleksi</th>-->
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Nomor Visa</th>
                                        <th>Status</th>
                                        <th>Tanggal Keberangkatan</th>
                                        <th>Aksi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $detail_pelamar = $this->Pelamar_m->select_pelamar();
                                    foreach ($detail_pelamar as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_pelamar; ?></td>
                                            <td><?php echo $row->tempat_lahir_pelamar; ?></td>
                                            <td><?php echo $row->tanggal_lahir_pelamar; ?></td>
                                            <td><?php echo $row->nomor_calling_visa; ?></td>
                                            <td><?php echo $row->status; ?></td>
                                            <td><?php echo $row->tanggal_keberangkatan; ?></td>
                                            <td class="center">
                                                <a href="<?php echo site_url("") ?>" class="btn btn-primary">Edit</a>
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("") ?>" class="btn btn-danger">Hapus</a>
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
        

