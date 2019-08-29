<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pengiriman</a> <a href="#" class="current">Laporan Pengiriman</a> </div>
        <h1 class="text-center">Keterangan Pengiriman Dokumen</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
<!--                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Keterangan Pengiriman Dokumen</h5>
                    </div>-->
                    <?php
                            if (empty($detail)){
                                ?>
                            <script>
                                alert("Tidak ada pelamar");
                                location.assign("<?php echo site_url("Endorsement/data_pengiriman"); ?>");
                            </script>
                            <?php
                            } else {
                            foreach ($detail as $a) {
                                ?>
                    <div class="widget-content">
                        <p><a href="<?php echo site_url("Endorsement/pengiriman_excel/$a->id_lowongan"); ?>" class="btn btn-info">Cetak Excel</a></p>

                            
                                <!--content here-->
                                <!--<div class="widget-content nopadding">-->
                                <p><strong>Tanggal :</strong> <?php echo $a->tanggal_pengiriman; ?></p>
                                <p><strong>Keterangan :</strong> <?php echo $a->pengiriman_dokumen; ?></p>
                                <p><strong>Perusahaan :</strong> <?php echo $a->nama_perusahaan; ?></p>
                                <p><strong>Lokasi Perusahaan :</strong> <?php echo $a->lokasi_perusahaan; ?></p>
                                <p><strong>Jenis Pekerjaan :</strong> <?php echo $a->jenis_pekerjaan; ?></p>
                                <p>Data pelamar yang dikirim untuk diendorsement </p>

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>ID CPMI</th> 
                                            <th>Nama</th> 
                                            <th>Tempat Lahir</th> 
                                            <th>Tanggal Lahir</th> 
                                            <th>Alamat</th> 
                                            <th>Nomor Paspor</th> 
                                            <th>Tanggal Visa</th> 
                                            <th>Nomor Visa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($pelamar as $row) {
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row->id_cpmi; ?></td> 
                                                <td><?php echo $row->nama_pelamar; ?></td> 
                                                <td><?php echo $row->tempat_lahir_pelamar; ?></td> 
                                                <td><?php echo $row->tanggal_lahir_pelamar; ?></td>
                                                <td><?php echo $row->alamat_pelamar; ?></td>
                                                <td><?php echo $row->nomor_paspor; ?></td>
                                                <td><?php echo $row->tanggal_visa; ?></td>
                                                <td><?php echo $row->nomor_calling_visa; ?></td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            <?php } }?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>