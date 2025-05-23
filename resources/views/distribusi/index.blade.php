@extends('layouts.master')
<<<<<<< HEAD
@section('title', 'Distribusi Barang')
=======
@section('title', 'Distribusi')
>>>>>>> df605c6eb76048f5ab32fcacba09bb1244368eca
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
                                            <a class="btn btn-primary"
                                                href="{{ route('distribusi.edit', $distribusi->id) }}">Edit</a> |
                                            <button type="button" class="btn btn-danger delete" data-toggle="modal"
                                                data-target="#exampleModal" id="{{ $distribusi->id }}">
                                                Delete
                                            </button>
                                            |<a id="print" href="{{ route('distribusi.show', $distribusi->id) }}"  class="btn btn-info"><i class="fas fa-print"></i></a
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
                            <img src="" class="img_header" style="height: 75px;">
                        </div>
                    </td>
                    <td>
                        <div>
                            <center>
                             15151555   KEMENTERIAN KESEHATAN REPUBLIK INDONESIA<br>
                                DIREKTORAT JENDRAL PELAYANAN KESEHATAN<br>
                                RSUP PROF. DR. R. D. KANDOU MANADO <br>
                                JL.RAYA TANAWANGKO PO.BOX 102 MANADO <br>
                            </center>
                        </div>
                    </td>
                    <td>
                        <div align="right">
                            <img src=" " class="img_header" style="height: 75px;">
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
<<<<<<< HEAD
        $(document).ready(function() {
             // print
        $('a#print').on('click', function(e) {
            e.preventDefault();
            // let kd_trx = $(this).data('kd_trx');
                getprint();
            // ajax request
            $.ajax({
                url: "",
                type: "post",
                data: {

                },
                dataType: "json",
                success: function(response) {


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
            // window.frames["print_frame"].document.title = document.title;
             window.frames["print_frame"].document.body.innerHTML = isi;
            window.frames["print_frame"].window.focus();
            window.frames["print_frame"].window.print();
        }


=======
    $(document).ready(function() {
            $('#myTable').DataTable();
            $('.delete').on('click', function () {
                const id = this.id;
                $('#deleteModal').attr('action', '{{ route("distribusi.destroy", "") }}' + '/' + id);
            });
        });
>>>>>>> df605c6eb76048f5ab32fcacba09bb1244368eca
    </script>
@endsection
