<!DOCTYPE html>
<html>
<head></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
    <style>
            @page {
                margin-left: 2cm;
            }

            .font_header_kop {
                font-size: 1.2em;
                font-family: sans-serif;
                border-bottom: #000 solid 1px;
                margin-bottom: 5px;
            }

            .ttd {
                margin-top: 20px;
            }

            .tr {
                height: 90px;
            }
        </style>
        <title></title>
        <center>
            <table class="font_header_kop" width="100%">
                <tr>
                    <td>
                        <div align="left">
                           <img src="/public/assets/img/kandou1.jpg" style="height:75 px;"
                        </div>
                    </td>
                    {{-- <td>
                        <div>
                            <center>

                            </center>
                        </div>
                    </td> --}}
                    <td>
                        <div align="right">
                            <img src="/public/assets/img/kandou2.jpg" style="height:75 px;">
                        </div>
                    </td>
                </tr>
            </table>
        </center>
        <br>
        <center>
            <strong>
                <h2> PENAMBAHAN/PEMINDAHAN INFRASTRUKTUR </h2>
            </strong>
        </center>
        <table width=100%>
            <tr>
                <td>
                    <div align="right">

                    </div>

                </td>
                <td>
                    <div align="center">

                    </div>
                </td>
                <td>
                    <div align="right">
                        <h3>
                            <p id="no_form"></p>
                        </h3>


                    </div>
                </td>
            </tr>
        </table>
        <br>
        <br>


        <table id="mytable">
            <tr>
                <td>Tanggal Permintaan</td>
                <td>:</td>
                <td>
                    <p id="trx_date2">
                    </p>
                </td>
            </tr>
            <tr>
                <td> Reference</td>
                <td>:</td>
                <td>
                    <p id="reference2"></p>
                </td>
            </tr>
            <tr>
                <td> Ke Unit kerja </td>
                <td>:</td>
                <td>
                    <p id="nm_instansi"> </p>
                </td>
                <td>
                    <p id="sub_instansi"> </p>
                </td>
            </tr>
            <tr>
                <td> Status</td>
                <td> :</td>
                <td>
                    <p id="status2"></p>
                </td>
            </tr>
            <tr>
                <td>Produk </td>
                <td>:</td>
                <td>
                    <p id="produk2"></p>
                </td>
                <td></td>
                <td></td>
                <td>QTY</td>
                <td>
                    :
                </td>
                <td>
                    <p id="qty2"></p>
                </td>
            </tr>
            <tr>
                <td>Serial Number </td>
                <td>:</td>
                <td>
                    <p id="sn2"></p>
                </td>
            </tr>
            <tr>
                <td>Alasan</td>
                <td>:</td>
                <td>
                    <p id="alasan2"></p>
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                    <p id="kat2"></p>
                </td>
            </tr>
            <tr>
                <td>Kebijakan</td>
                <td>:</td>
                <td>
                    <p id="kebijakan2"></p>
                </td>
            </tr>
            <tr>
                <td>Tanggal Mulai</td>
                <td>:</td>
                <td>
                    <p id="tgl_mulai2"></p>
                </td>
            </tr>
            <tr>
                <td>Tanggal Selesai</td>
                <td>:</td>
                <td>
                    <p id="tgl_selesai2"></p>
                </td>
            </tr>
            <tr>
                <td>Diketahui Oleh</td>
                <td>:</td>
                <td>
                    <p id="diket2"></p>
                </td>
            </tr>
        </table>

        <table width=100%>
            <tr>
                <td>
                    <div align="left" class="ttd">
                        <table>
                            <tr>
                                <td>Pemohon</td>
                            </tr>
                            <tr class="tr">

                            </tr>



                            <tr>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>NIP.</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    <div align="center" class="ttd">
                        <table>
                            <tr>
                                <td></td>
                            </tr>
                            <tr class="tr">

                            </tr>


                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </table>


                    </div>
                </td>
                <td>
                    <div align="right" class="ttd">
                        <table>
                            <tr>
                                <td> Menyetujui ka. Instalasi SIMRS</td>
                            </tr>
                            <tr class="tr">

                            </tr>


                            <tr>
                                <td>
                                    <p id="ki2"></p>
                                </td>
                            </tr>
                            <tr>
                                <td id="nip2">NIP</td>

                            </tr>
                        </table>


                    </div>
                </td>

            </tr>

        </table>

</body>
</html>
