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
                        <div class="scroollme">
                        <div class="widget-content">
                            <p> <a href="<?php echo site_url("Endorsement/data_pengiriman_excel/$id_pengiriman"); ?>"
                               class="btn btn-info">Cetak Excel</a>
                        </p>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Alamat Perusahaan</th>
                                        <th>ID CPMI</th>
                                        <th>Nama Pelamar</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat Pelamar</th>
                                        <th>Nomor Paspor</th>
                                        <th>Nomor Visa</th>
                                        <th>Tanggal Keluar Visa</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_perusahaan; ?></td>
                                            <td><?php echo $row->alamat_perusahaan; ?></td>
                                            <td><?php echo $row->id_cpmi; ?></td>
                                            <td><?php echo $row->nama_pelamar; ?></td>
                                            <td><?php echo $row->tempat_lahir_pelamar; ?></td>
                                            <td><?php echo $row->tanggal_lahir_pelamar; ?></td>
                                            <td><?php echo $row->alamat_pelamar; ?></td>
                                            <td><?php echo $row->nomor_paspor; ?></td>
                                            <td><?php echo $row->nomor_calling_visa; ?></td>
                                            <td><?php echo $row->tanggal_visa; ?></td>
                                            <td class="center">
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="" class="btn btn-danger">Hapus</a>
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


