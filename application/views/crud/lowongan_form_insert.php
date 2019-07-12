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
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Lowongan/data_lowongan'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">

                            <div class="control-group">
                                <label class="control-label">Tanggal Kontrak (dd-mm)</label>
                                <div class="controls">
                                    <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span4">
                                    <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Lokasi Perusahaan</label>
                                <div class="controls">
                                    <select class="span4">
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
                                    <textarea class="span8" ></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Profil Perusahaan</label>
                                <div class="controls">
                                    <textarea class="span8" ></textarea>
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
        
