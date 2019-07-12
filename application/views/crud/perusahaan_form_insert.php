<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Perusahaan</a> <a href="#" class="current">Error</a> </div>
        <h1>Perusahaan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Perusahaan</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Perusahaan/proses_insert_perusahaan'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">

                            <div class="control-group">
                                <label class="control-label">Nama Perusahaan</label>
                                <div class="controls">
                                    <input type="text" name="nama_perusahaan" placeholder="Tulis nama perusahaan..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Lokasi Perusahaan</label>
                                <div class="controls">
                                    <select class="span4" name="lokasi_perusahaan">
                                        <option>--Pilih Lokasi Perusahaan--</option>
                                        <option>Kuala Lumpur, Malaysia</option>
                                        <option>Selangor, Malaysia</option>
                                        <option>Johor, Malaysia</option>
                                        <option>Sabah, Malaysia</option>
                                        <option>Serawak, Malaysia</option>
                                        <option>Singapura</option>
                                        <option>Taiwan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Alamat Perusahaan</label>
                                <div class="controls">
                                    <textarea class="span8" name="alamat_perusahaan"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Profil Perusahaan</label>
                                <div class="controls">
                                    <textarea class="span8" name="profil_perusahaan"></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <input type="submit" value="Simpan" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>
        
