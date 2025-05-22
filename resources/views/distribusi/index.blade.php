@extends('layouts.master')
@section('title', 'Distribusi')
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
            $('#myTable').DataTable();
            $('.delete').on('click', function () {
                const id = this.id;
                $('#deleteModal').attr('action', '{{ route("distribusi.destroy", "") }}' + '/' + id);
            });
        });
    </script>
@endsection
