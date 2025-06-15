@extends('layouts.master')
@section('title', 'Distribusi Barang')
@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success col-12"  x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)">
                                <p>{{ $message }}</p>
                                </div>
                            @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                {{-- <h2> testst</h2> --}}
                            </div>
                            <div class="pull-right col-6">
                              <a class="btn btn-success" href="{{ route('distribusi.create')}}"> Create </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <th>No.</th>
                                <th>Nomer Surat</th>
                                <th>Tanggal Permintaan</th>
                                <th>Unit Kerja</th>
                                <th>Tujuan</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($Distribusis as $distribusi)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $distribusi->nomer_surat }}</td>
                                        <td>{{ $distribusi->tanggal_permintaan }}</td>
                                        <td>{{ $distribusi->unit_kerja }}</td>
                                        <td>{{ $distribusi->tujuan }}</td>
                                        <td>
                                          @if ($distribusi->uploads == "")
                                             <a class="btn btn-primary" href="{{ route('distribusi.edit', $distribusi->id) }}">Edit</a>
                                             <a class="btn btn-primary"
                                                 href="{{ route('upload_file', $distribusi->id) }}"><i class="fas fa-upload"></i></a>
                                          @endif

                                            @if ($distribusi->uploads)
                                             <a class="btn btn-warning" href="{{ route('distribusi.viewPdf', $distribusi->id) }} " target="_blank"><i class="fas fa-eye"></i></a>
                                            @endif

                                            <a id="print" href="" data-id="{{ $distribusi->id }}" class="btn btn-info"> <i class="fas fa-print"></i> </a

                                            {{-- <a class="btn btn-primary"
                                                href="{{ route('distribusi.show', $distribusi->id) }}">Print</a> --}}
                                            {{-- <a class="btn btn-primary"
                                                href="{{ route('generatePDF', $distribusi->id) }}">pdf</a> --}}
                                            {{-- <a  class="btn btn-danger delete"
                                                data-toggle="modal"
                                                data-target="#exampleModal" id="{{ $distribusi->id }}">
                                                <i class="fas fa-trash" style="color:rgb(250, 250, 250)"></i>
                                                </a> --}}

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tampilan_print" style="display:none">
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
                            <img src="{{url(asset('storage/kandou1.jpg'))}}"  style="height:75 px;">
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
                             <img src="{{url(asset('storage/kandou2.jpg'))}}"  style="height:75 px;">
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
                            <p id="nomer_surat"></p>
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
                    <p id="tanggal_permintaan">
                    </p>
                </td>
            </tr>
            <tr>
                <td> Unit Kerja</td>
                <td>:</td>
                <td>
                    <p id="unit_kerja"> </p>
                </td>
            </tr>
            <tr>
                <td>Pemindahan / Penambahan</td>
                <td>:</td>
                <td>
                    <pre id="jenis_distribusi"></pre>
                </td>
            </tr>
            <br>
            <br>
            <br>
            <tr>
                <td> Status Barang </td>
                <td> :</td>
                <td>
                    <p id="status_barang"></p>
                </td>
            </tr>
            <tr>
                <td>Alasan </td>
                <td>:</td>
                <td>
                    <p id="alasan"></p>
                </td>


            </tr>
            <tr>
                 <td>tujuan</td>
                <td>
                    :
                </td>
                <td>
                    <p id="tujuan"></p>
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                    <p id="kategori_distribusi"></p>
                </td>
            </tr>
            <tr>
                <td>Kebijakan / Prosedur yang mendukung*</td>
                <td>:</td>
                <td>
                    <p id="prosedur"></p>
                </td>
            </tr>
            <tr>
                <td>Tanggal Mulai</td>
                <td>:</td>
                <td>
                    <p id="tanggal_mulai"></p>
                </td>
            </tr>
            <tr>
                <td>Tanggal Selesai</td>
                <td>:</td>
                <td>
                    <p id="tanggal_selesai"></p>
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
                                    <p id="pemohon"></p>
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
                                    <p id="">Patrick M. Andries, ST, MBA, QWP</p>
                                </td>
                            </tr>
                            <tr>
                                <td id="">NIK. 1990052720170510895</td>

                            </tr>
                        </table>


                    </div>
                </td>

            </tr>

        </table>

    </div>
    <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="deleteModal" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this data?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {

            //datatable
            $('#myTable').DataTable();
            let column = this;
            // Create input element
            let input = document.createElement('input');

             // print
        $('a#print').on('click', function(e) {
            e.preventDefault();

              const id = $(this).data('id');
                // console.log(id);

            // ajax request
            $.ajax({
                url:'{{ route("distribusi.show", "") }}' + '/' + id,

                type: "get",
                data: {
                    id:id
                },
                dataType: "json",
                success: function(response) {

                    $('#nomer_surat').html('F/09R3/' + response.nomer_surat);
                    $('#tanggal_permintaan').html(response.tanggal_permintaan);
                    $('#unit_kerja').html( response.unit_kerja);

                    $('#jenis_distribusi').html(response.jenis_distribusi);
                    $('#status_barang').html(response.status_barang);
                    $('#alasan').html(response.alasan);
                    $('#tujuan').html(response.tujuan);
                    $('#kategori_distribusi').html(response.kategori_distribusi);
                    $('#prosedur').html(response.prosedur);
                    $('#tanggal_mulai').html(response.tanggal_mulai);
                    $('#tanggal_selesai').html(response.tanggal_selesai);
                    $('#pemohon').html(response.pemohon);



                   getprint();
                    // $('#23').html(response.reference);
                    // You will get response from your PHP page (what you echo or print)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        });
        })

        function getprint() {

        $('#tampilan_print').hide()
            // print()
            let isi = document.getElementById('tampilan_print').innerHTML;
            window.frames["print_frame"].document.title = document.title;
            window.frames["print_frame"].document.body.innerHTML = isi;
            window.frames["print_frame"].window.focus();
            window.frames["print_frame"].window.print();
        }


    </script>
@endsection
