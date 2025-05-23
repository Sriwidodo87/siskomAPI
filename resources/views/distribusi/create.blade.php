@extends('layouts.master')
@section('title', 'Create | Distribusi')
@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $page_title }}</h4>
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    {{-- <h2>Create New User</h2> --}}
                                </div>
                                <div class="pull-right">
                                    <a class="btn  btn-primary" href="{{ route('distribusi.index') }}"> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    @if (count($errors) > 0)
                      <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                           @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                      </div>
                    @endif
                        <form action="{{ route('distribusi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body ">
                        <div class="row">
                            <div class="form-group col-4">
                                <label>Nomer Surat</label>
                                <input type="text" name="nomer_surat" id="nomer_surat" class="form-control" readonly>
                            @error('nomer_surat')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group col-4 ">
                                <label>Tanggal Permintaan</label>
                                <input type="date" name="tanggal_permintaan" id="tanggal_permintaan" class="form-control">
                            @error('tanggal_permintaan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group col-4">
                                <label>Unit Kerja</label>
                                <input type="text" name="unit_kerja" id="unit_kerja" class="form-control">
                            @error('unit_kerja')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>Jenis Distribusi</label>
                                <input type="text" name="jenis_distribusi" id="jenis_distribusi" class="form-control">
                            @error('jenis_distribusi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>Status Barang</label>
                               <select name="status_barang" id="status_barang" class="form-control" required>
                                            <option value=""></option>

                                            <option value="BARU"> BARU</option>
                                            <option value="PINDAH"> PINDAH</option>

                                        </select>
                            @error('status_barang')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group col-12">
                                <label>Alasan</label>
                                <textarea type="text" name="alasan" id="alasan" class="form-control">
                                </textarea>
                            @error('alasan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group col-4">
                                <label>Tujuan</label>
                                <input type="text" name="tujuan" id="tujuan" class="form-control">
                            @error('tujuan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group col-4">
                                <label>Kategori Distribusi</label>
                                <select name="kategori_distribusi" id="kategori_distribusi" class="form-control">
                                            <option value=""></option>
                                            <option value="MENDESAK"> MENDESAK</option>
                                            <option value="TIDAK MENDESAK"> TIDAK MENDESAK</option>

                                        </select>
                            @error('kategori_distribusi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group col-4">
                                <label>Prosedur</label>
                                <select name="prosedur" id="prosedur" class="form-control">
                                            <option value=""></option>
                                            <option value="TIDAK ADA">TIDAK ADA</option>
                                            <option value="ADA">ADA</option>
                                        </select>
                            @error('prosedur')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>Tanggal Mulai</label>
                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control">
                            @error('tanggal_mulai')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control">
                            @error('tanggal_selesai')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group col-12">
                                <label>Pemohon</label>
                                <input type="text" name="pemohon" id="pemohon" class="form-control">
                            @error('pemohon')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>

                            <div class="form-group col-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
