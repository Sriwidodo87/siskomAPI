@extends('layouts.master')
@section('title', '')
@section('content')

 <style>
            @page {
                margin-left: 2cm;
                margin-top:0.1cm;
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
                            <img src="{{asset('storage/kandou1.jpg')}}" style="height:75 px;">
                            {{-- <img src="{{asset('assets/img/kandou1.jpg')}}" style="height:75 px;"> --}}
                        </div>
                    </td>
                    {{-- <td>
                        <div>
                            <center>
                                KEMENTERIAN KESEHATAN REPUBLIK INDONESIA<br>
                                DIREKTORAT JENDRAL PELAYANAN KESEHATAN<br>
                                RSUP PROF. DR. R. D. KANDOU MANADO <br>
                                JL.RAYA TANAWANGKO PO.BOX 102 MANADO <br>
                            </center>
                        </div>
                    </td> --}}
                    <td>
                        <div align="right">
                             <img src="{{asset('storage/kandou2.jpg')}}" style="height:75 px;">
                             {{-- <img src="{{asset('assets/img/kandou2.jpg')}}" style="height:75 px;" > --}}
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
                            <p id="nomer_surat">{{$data->nomer_surat}}
                        </h3>
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <br>


        <table id="mytable">
            <tr >
                <td style="font-size:1.0em;">Tanggal Permintaan</td>
                <td>:</td>
                <td>
                   {{$data->tanggal_permintaan}}
                </td>
            </tr>
            <tr>
                <td> Unit Kerja</td>
                <td>:</td>
                <td>
                   {{$data->unit_kerja}}
                </td>
            </tr>
            <tr>
                <td>Pemindahan / Penambahan</td>
                <td>:</td>
                <td>
                   {{$data->jenis_distribusi}}
                </td>
            </tr>
            <tr>
                <td> Status Barang </td>
                <td> :</td>
                <td>
                  {{$data->status_barang}}
                </td>
            </tr>
            <tr>
                <td>Alasan </td>
                <td>:</td>
                <td>
                    <p id="alasan">{{$data->alasan}}</p>
                </td>
                <td></td>
                <td></td>
                <td>tujuan</td>
                <td>
                    :
                </td>
                <td>
                   {{$data->tujuan}}
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                   {{$data->kategori_distribusi}}
                </td>
            </tr>
            <tr>
                <td>Kebijakan / Prosedur yang mendukung*</td>
                <td>:</td>
                <td>
                   {{$data->prosedur}}
                </td>
            </tr>
            <tr>
                <td>Tanggal Mulai</td>
                <td>:</td>
                <td>
                   {{$data->tanggal_mulai}}
                </td>
            </tr>
            <tr>
                <td>Tanggal Selesai</td>
                <td>:</td>
                <td>
                   {{$data->tanggal_selesai}}
                </td>


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
                                    {{$data->pemohon}}
                                    <p>NIP.</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    <div align="center" class="ttd">



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
                                <td>Patrick M. Andries, ST, MBA, QWP </td>
                            </tr>
                            <tr><td>NIK. 1990052720170510895</td> </tr>





                        </table>


                    </div>
                </td>

            </tr>
        </table>


@endsection
@section('scripts')

@endsection
