<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Seleksi</a> <a href="#" class="current">Seleksi</a> </div>
        <h1>Informasi Seleksi</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Seleksi</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                            <h5>Form Data Seleksi</h5>
                        </div>
                        <div class="widget-content">

                            <!--bikin button tambah-->
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Seleksi</th>
<!--                                        <th>Tanggal Seleksi</th>-->
                                        <th>Lokasi Seleksi</th>
                                        <th>Tanggal Post</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>12 Mei 2019</td>
                                            <td>Gedung Madu Candya</td>
                                            <td>5 Mei 2019</td>
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
        

