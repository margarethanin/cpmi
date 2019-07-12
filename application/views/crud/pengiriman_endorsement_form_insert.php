<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sample pages</a> <a href="#" class="current">Error</a> </div>
        <h1>Pengiriman Endorsement</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pengiriman Endorsement</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Pengiriman_Endorsement/proses_insert_pengiriman_endorsement'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            
                            <div class="control-group">
                                <label class="control-label">Tanggal Pengiriman</label>
                                <div class="controls">
                                    <input type="text" name="tanggal_endorsement" data-date="01-01-2019" data-date-format="dd-mm-yyyy" value="01-01-2019" class="datepicker span4">
                                    <span class="help-block">Format Tanggal (dd-mm-yy)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Ekspedisi Pengiriman</label>
                                <div class="controls">
                                    <input type="text" name="pengiriman_dokumen" placeholder="Tulis nama ekspedisi pengiriman..." class="span4 m-wrap">
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
        
