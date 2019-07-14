<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Lowongan</a> <a href="#" class="current">Lowongan</a> </div>
        <h1>Lowongan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Lowongan</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Lowongan</h5>
                        </div>
                        <div class="widget-content">

                            <!--bikin button tambah-->
                            <p>
                                <a href="<?php echo site_url('Lowongan/form_insert_lowongan'); ?>"
                                   class="btn btn-info">Tambah Lowongan</a>
                            </p>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Kontrak</th>
<!--                                        <th>Tanggal Seleksi</th>-->
                                        <th>Nama Perusahaan</th>
                                        <th>Lokasi Perusahaan</th>
                                        <th>Jenis Pekerjaan</th>
                                        <th>Permintaan Lowongan</th>
                                        <th>Nominal Upah</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $data_lowongan = $this->Lowongan_m->select_lowongan();
                                    foreach ($data_lowongan as $row) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->tanggal_kontrak; ?></td>
                                            <td><?php echo $row->nama_perusahaan; ?></td>
                                            <td><?php echo $row->lokasi; ?></td>
                                            <td><?php echo $row->pekerjaan; ?></td>
                                            <td><?php echo $row->permintaan_lowongan; ?></td>
                                            <td><?php echo $row->nominal_upah; ?></td>
                                            <td class="center">
                                                <button class="btn btn-primary">Edit</button>
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Lowongan/hapus_data_lowongan/$row->id_lowongan") ?>" class="btn btn-danger">Hapus</a>
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
        

