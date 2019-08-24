<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=file.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<?php
foreach ($detail as $a) {
?>
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
<?php
} ?>