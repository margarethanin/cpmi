<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sample pages</a> <a href="#" class="current">Error</a> </div>
        <h1>Jenis Pekerjaan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pekerjaan</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Pekerjaan</h5>
                        </div>
                        <div class="widget-content">
                            <p> <a href="<?php echo site_url('Pengiriman_Endorsement/form_insert_pengiriman_endorsement'); ?>"
                                    class="btn btn-info">Tambah Pekerjaan</a>
                            </p>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Pengiriman</th>
                                        <th>Ekspedisi Pengiriman</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no=1;
                                    $data_pekerjaan = $this->Pengiriman_Endorsement_m->select_pengiriman_endorsement();
                                    foreach ($data_pengiriman_endorsement as $row){
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row->tanggal_endorsement; ?></td>
                                        <td><?php echo $row->pengiriman_dokumen; ?></td>
                                        <td class="center">
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                    <?php }?>
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
        

