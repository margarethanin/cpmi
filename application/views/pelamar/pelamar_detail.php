<?php $this->load->view('header'); ?>

<?php
$no = 1;
foreach ($detail_pelamar as $row) {
    ?>

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pelamar</a> <a href="#" class="current">Detail</a> </div>
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
                            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                                <h5>Form Detail Data Pelamar</h5>
                            </div>
                            <!--<div class="widget-content">-->
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelamar</th>
                                            <th>Tampat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>No.HP Pelamar</th>
                                            <th>Nama Orang Tua</th>
                                            <th>Alamat Pelamar</th>
                                            <th>Kode Pos</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Status Diri</th>
                                            <th>Nama Keluarga Lain</th>
                                            <th>Umur Keluarga Lain</th>
                                            <th>Hubungan Keluarga Lain</th>
                                            <th>Alamat Keluarga Lain</th>
                                            <th>No.HP Keluarga Lain</th>
                                            <th>Minat Bekerja</th>
                                            <th>Minat Lokasi Bekerja</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td class="center"><?php echo $row->nama_pelamar; ?></td>
                                            <td class="center"><?php echo $row->tempat_lahir_pelamar; ?></td>
                                            <td class="center"><?php echo $row->tanggal_lahir_pelamar; ?></td>
                                            <td class="center"><?php echo $row->jenis_kelamin; ?></td>
                                            <td class="center"><?php echo $row->agama; ?></td>
                                            <td class="center"><?php echo $row->nomor_hp_pelamar; ?></td>
                                            <td class="center"><?php echo $row->nama_orang_tua; ?></td>
                                            <td class="center"><?php echo $row->alamat_pelamar; ?></td>
                                            <td class="center"><?php echo $row->kode_pos; ?></td>
                                            <td class="center"><?php echo $row->pendidikan_terakhir_pelamar; ?></td>
                                            <td class="center"><?php echo $row->status_diri; ?></td>
                                            <td class="center"><?php echo $row->nama_keluarga_lain; ?></td>
                                            <td class="center"><?php echo $row->umur_keluarga_lain; ?></td>
                                            <td class="center"><?php echo $row->hubungan_keluarga_lain; ?></td>
                                            <td class="center"><?php echo $row->alamat_keluarga_lain; ?></td>
                                            <td class="center"><?php echo $row->nomor_hp_keluarga_lain; ?></td>
                                            <td class="center"><?php echo $row->minat_bekerja; ?></td>
                                            <td class="center"><?php echo $row->minat_lokasi_kerja; ?></td>
                                            <td class="center">
                                                <a href="<?php echo site_url("Pelamar/form_edit_pelamar/$row->id_pelamar") ?>" class="btn btn-primary">Edit</a>
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo site_url("Pelamar/hapus_detail_pelamar/$row->id_pelamar") ?>" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="widget-content">
<!--                            <p> <a href="?php echo site_url('Berkas/form_insert_berkas_dasar'); ?>"
                                   class="btn btn-success">Tambah Berkas Dasar</a>
                            </p>-->

                            <!--//////////////////////////////TABEL BERKAS DASAR/////////////////////////////-->
                            <div class="col-md-6">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Berkas Dasar</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($dasar as $row2) {
                                            ?>                                          
                                            <!--FOTO-->
                                            <tr class="odd gradeX">
                                                <td><strong>Foto</strong></td>
                                                <td width="25%">
                                                    <img class="img-responsive" style="width: 100%" src="<?php echo base_url("assets/berkas_pelamar/$row2->foto"); ?>">
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/foto/dasar"); ?>">Edit</a>

                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>

                                            <!--KTP-->
                                            <tr class="odd gradeX">
                                                <td>        
                                                    <p><strong>KTP</strong></p>
                                                    <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_ktp ?></p>
                                                    <p>Tanggal Keluar: <?php echo $row2->tanggal_keluar_ktp ?></p>
                                                </td>
                                                <td>
        <!--                                                        <p><img style="width: 150px;height: 180px;" src=""></p>
                                                    -->                                                        <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->ktp"); ?>"></p>
                                                    <p></p>
                                                    <p></p>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/ktp/dasar"); ?>">Edit</a>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>

                                                <!--Kartu Keluarga-->
                                            <tr class="odd gradeX">
                                                <td>        
                                                    <p><strong>Kartu Keluarga</strong></p>
                                                    <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_kartu_keluarga ?></p>
                                                    <p>Tanggal Keluar</p>
                                                </td>
                                                <td>
                                                    <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->kartu_keluarga"); ?>"></p></p>
                                                    <p></p>
                                                    <p></p>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/kartu_keluarga/dasar"); ?>">Edit</a>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>

                                                <!--Ijazah-->
                                            <tr class="odd gradeX">
                                                <td>        
                                                    <p><strong>Ijazah</strong></p>
                                                    <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_ijazah ?></p>
                                                    <p>Tanggal Keluar</p>
                                                </td>
                                                <td>
                                                    <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->ijazah"); ?>"></p>
                                                    <p></p>
                                                    <p></p>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/ijazah/dasar/dasar"); ?>">Edit</a>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>

                                                <!--Akta Lahir-->
                                            <tr class="odd gradeX">
                                                <td>        
                                                    <p><strong>Akta Lahir</strong></p>
                                                    <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_akta_lahir ?></p>
                                                    <p>Tanggal Keluar</p>
                                                </td>
                                                <td>
                                                    <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->akta_lahir"); ?>"></p>
                                                    <p></p>
                                                    <p></p>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/akta_lahir/dasar"); ?>">Edit</a>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>

                                                <!--Surat Izin-->
                                            <tr class="odd gradeX">
                                                <td>        
                                                    <p><strong>Surat Izin</strong></p>
                                                    <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_surat_izin ?></p>
                                                    <p>Tanggal Keluar</p>
                                                </td>
                                                <td>
                                                    <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->surat_izin"); ?>"></p>
                                                    <p></p>
                                                    <p></p>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/surat_izin/dasar"); ?>">Edit</a>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>

                                                <!--Buku Nikah-->
                                            <tr class="odd gradeX">
                                                <td>        
                                                    <p><strong>Buku Nikah</strong></p>
                                                    <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_buku_nikah ?></p>
                                                    <p>Tanggal Keluar</p>
                                                </td>
                                                <td>
                                                    <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->buku_nikah"); ?>"></p>
                                                    <p></p>
                                                    <p></p>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/buku_nikah/dasar"); ?>">Edit</a>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>

                                                <!--Akta Cerai-->
                                            <tr class="odd gradeX">
                                                <td>        
                                                    <p><strong>Akta Cerai</strong></p>
                                                    <p>Tanggal Masuk : <?php echo $row2->tanggal_masuk_akta_cerai ?></p>
                                                    <p>Tanggal Keluar</p>
                                                </td>
                                                <td>
                                                    <p><img class="img-responsive" src="<?php echo base_url("assets/berkas_pelamar/$row2->akta_cerai"); ?>"></p>
                                                    <p></p>
                                                    <p></p>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/akta_cerai/dasar"); ?>">Edit</a>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>

                                        </tbody>
                                    </table>
                                </div>
<!--                                <p> <a href="?php echo site_url('Berkas/form_insert_berkas_proses'); ?>"
                                       class="btn btn-warning">Tambah Berkas Proses</a>
                                </p>-->
                            <?php } ?>

                            <!--//////////////////////////////TABEL BERKAS PROSES/////////////////////////////-->

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Berkas Dasar</th>
                                        <th>File</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!--MEDICAL-->
                                    <tr class="odd gradeX">
                                        <td>        
                                            <p><strong>Medical</strong></p>
                                            <p>Tanggal Pembuatan</p>
                                            <p>Tanggal Kadaluwarsa</p>
                                        </td>
                                        <td>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/medical/proses"); ?>">Edit</a>
                                            <button class="btn btn-danger">Hapus</button>
                                        </td>

                                        <!--ID PELAMAR-->
                                    <tr class="odd gradeX">
                                        <td><strong>ID PMI</strong></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Hapus</button>
                                        </td>
                                    </tr>

                                    <!--PASPOR-->
                                    <tr class="odd gradeX">
                                        <td>        
                                            <p><strong>Paspor</strong></p>
                                            <p>Nomor Paspor</p>
                                            <p>Tanggal Pembuatan</p>
                                            <p>Tanggal Kadaluwarsa</p>
                                        </td>
                                        <td>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/paspor/proses"); ?>">Edit</a>
                                            <button class="btn btn-danger">Hapus</button>
                                        </td>

                                        <!--ISC-->
                                    <tr class="odd gradeX">
                                        <td>        
                                            <p><strong>ISC</strong></p>
                                            <p>Tanggal Pembuatan</p>
                                            <p>Tanggal Kadaluwarsa</p>
                                        </td>
                                        <td>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/isc/proses"); ?>">Edit</a>
                                            <button class="btn btn-danger">Hapus</button>
                                        </td>

                                        <!--FWCMS-->
                                    <tr class="odd gradeX">
                                        <td>        
                                            <p><strong>FWCMS</strong></p>
                                            <p>Tanggal Pembuatan</p>
                                            <p>Tanggal Kadaluwarsa</p>
                                        </td>
                                        <td>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="<?php echo site_url("Berkas/update_berkas/$row->id_pelamar/fwcms/proses"); ?>">Edit</a>
                                            <button class="btn btn-danger">Hapus</button>
                                        </td>

                                        <!--ASURANSI PRA-->
                                    <tr class="odd gradeX">
                                        <td><strong>Asuransi Pra Kerja</strong></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Hapus</button>
                                        </td>
                                    </tr>

                                    <!--NOMOR KTKLN-->
                                    <tr class="odd gradeX">
                                        <td><strong>Nomor KTKLN</strong></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Hapus</button>
                                        </td>
                                    </tr>

                                    <!--ASURANSI PURNA-->
                                    <tr class="odd gradeX">
                                        <td><strong>Asuransi Purna Kerja</strong></td>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Hapus</button>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                            <!--                                </div>-->
                        </div>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php $this->load->view('footer'); ?>