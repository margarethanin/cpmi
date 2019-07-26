<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Lowongan</a> <a href="#" class="current">Lowongan</a> </div>
        <h1>Data Lowongan ditawarkan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Lowongan</h5>
                    </div>
                    <div class="widget-content">
                        <p> <a href="<?php echo site_url("Endorsement/data_cpmi_hired_excel/$id_lowongan"); ?>"
                               class="btn btn-info">Cetak Excel</a>
                        </p>
                        <!--content here-->
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelamar</th>
                                        <th>Nomor Paspor</th>
                                        <th>Nomor Telefon</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($cpmi as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_pelamar; ?></td>
                                            <td><?php echo $row->nomor_paspor; ?></td>
                                            <td><?php echo $row->nomor_hp_pelamar; ?></td>
                                            <td class="center"><?php echo $row->alamat_pelamar; ?></td>
                                            <td class="center">
                                                <a class="btn btn-primary" href="<?php echo '' ?>"> Input Nomor Visa </a>
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