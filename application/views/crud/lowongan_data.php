<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sample pages</a> <a href="#" class="current">Error</a> </div>
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
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Kontrak</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Lokasi Perusahaan</th>
                                        <th>Alamat Perusahaan</th>
                                        <th>Profil Perusahaan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>03 Juli 2019</td>
                                        <td>Keswire Sdn.Bhd.</td>
                                        <td>Selangor</td>
                                        <td class="center"> Jalan satu dua tiga nomor 123, Selangor, Malaysia</td>
                                        <td class="center"> Perusahaan yang memproduksi baja untuk ekspor ke negara di benua eropa</td>
                                        <td class="center">
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Hapus</button>
                                        </td>
                                    </tr>
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
        

