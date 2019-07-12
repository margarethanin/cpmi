<?php $this->load->view('header'); ?>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sample pages</a> <a href="#" class="current">Error</a> </div>
        <h1>Pelamar</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pelamar</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <form class="form-horizontal" method="post" action="<?php echo site_url('Pelamar/data_pelamar'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">

                            <div class="control-group">
                                <label class="control-label">Nama Pelamar</label>
                                <div class="controls">
                                    <input type="text" placeholder="Tulis nama..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tempat Lahir</label>
                                <div class="controls">
                                    <input type="text" placeholder="Tulis tempat lahir..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tanggal Lahir (dd-mm)</label>
                                <div class="controls">
                                    <input type="text" data-date="01-01-2019" data-date-format="dd-mm-yyyy" value="01-01-2019" class="datepicker span4">
                                    <span class="help-block">Format Tanggal (dd-mm-yy)</span> </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Jenis Kelamin</label>
                                <div class="controls">
                                    <label>
                                        <input type="radio" name="radios" />
                                        Laki-Laki</label>
                                    <label>
                                        <input type="radio" name="radios" />
                                        Perempuan</label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Agama</label>
                                <div class="controls">
                                    <select class="span4">
                                        <option>Islam</option>
                                        <option>Katholik</option>
                                        <option>Kristen</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">No. HP Pelamar</label>
                                <div class="controls">
                                    <input type="text" placeholder="Tulis nomor handphone..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nama Orang Tua</label>
                                <div class="controls">
                                    <input type="text" placeholder="Tulis nama orang tua..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Alamat Pelamar</label>
                                <div class="controls">
                                    <textarea placeholder="Tulis alamat..." class="span4" ></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kode Pos</label>
                                <div class="controls">
                                    <input type="text" placeholder="Tulis kode pos..." class="span2 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pendidikan Terakhir</label>
                                <div class="controls">
                                    <input type="text" placeholder="Tulis pendidikan terakhir..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls">
                                    <label>
                                        <input type="radio" name="radios" />
                                        Belum Menikah</label>
                                    <label>
                                        <input type="radio" name="radios" />
                                        Menikah</label>
                                    <label>
                                        <input type="radio" name="radios" />
                                        Cerai</label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nama Keluarga Lainnya</label>
                                <div class="controls">
                                    <input type="text" placeholder="Tulis nama keluarga lainnya..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Umur Keluarga Lainnya</label>
                                <div class="controls">
                                    <input type="text" placeholder="Tulis umur..." class="span1 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Hubungan Keluarga</label>
                                <div class="controls">
                                    <select class="span4">
                                        <option>Ayah</option>
                                        <option>Ibu</option>
                                        <option>Kakak</option>
                                        <option>Adik</option>
                                        <option>Suami</option>
                                        <option>Istri</option>
                                        <option>Anak</option>
                                        <option>Sepupu</option>
                                        <option>Keponakan</option>
                                        <option>Kakek</option>
                                        <option>Nenek</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Alamat Keluarga Lainnya</label>
                                <div class="controls">
                                    <textarea placeholder="Tulis alamat..." class="span4" ></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">No. HP Keluarga Lainnya</label>
                                <div class="controls">
                                    <input type="text" placeholder="Tulis nomor handphone..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Minat Bekerja</label>
                                <div class="controls">
                                    <input type="text" placeholder="Tulis nama perusahaan yang diinginkan..." class="span4 m-wrap">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Minat Lokasi Bekerja</label>
                                <div class="controls">
                                    <input type="text" placeholder="Tulis lokasi perusahaan yang diinginkan..." class="span4 m-wrap">
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
        
