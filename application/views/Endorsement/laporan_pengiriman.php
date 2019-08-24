<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <h3 class="text-center"><u>PENGIRIMAN DOKUMEN</u></h3>

            <div class="container-fluid"><br>
                <!-- Control the column width, and how they should appear on different devices -->
                <div class="row"><br>
                    <div class="col-sm-12"><br>
                        <p>Tanggal :</p>
                        <p>Keterangan :</p>
                    </div>
                    <div class="col-sm-12">Data pengiriman</div>
                    <div class="col-sm-12">
                        <table>
                            <thead>
                                <tr>
                                    <td>Nomor</td>
                                    <td>ID CPMI</td> 
                                    <td>Nama</td> 
                                    <td>Tempat Lahir</td> 
                                    <td>Tanggal Lahir</td> 
                                    <td>Alamat</td> 
                                    <td>Nomor Paspor</td> 
                                    <td>Tanggal Visa</td> 
                                    <td>Nomor Visa</td> 
                                    <td>Perusahaan</td>
                                </tr>
                            </thead>
                            <tbody>
                            <td>1</td>
                            <td>321456</td> 
                            <td>Yogyakarta</td> 
                            <td>1995-10-10</td>
                            <td>JL. Kusumanegara</td>
                            <td>2019-02-30</td>
                            <td>BPA/FWCMS/HAAQ111311534</td>
                            <td>PINANG KESTURI SDN BHD</td>
                            </tbody>
                        </table>
                    </div>


                </div>
                <a class="float" title="cetak halaman" onclick="cetak();"> 
                    <i class="fa fa-print my-float" ></i>
                </a>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    function cetak() {
        print();
    }
</script>
<style>
    @media print
    {    
        .float, .float *, .notab
        {
            display: none !important;
        }
    }
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: purple;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
    }
    .my-float {
        margin-top: 22px;
    }
</style>