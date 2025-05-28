@extends('layouts.master')
@section('title', 'Home')
@section('content')
   <section class="section">
          <div class="section-header">
            <h1>LIST KOMPUTER</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">DataTables</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4></h4>
                  </div>
                  <div class="card-body">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <th>No</th>
                            <th>Hostname</th>
                            <th>Manufacture</th>
                            <th>Productname</th>
                            <th>Serial Number</th>
                            <th>SN BIOS</th>
                            <th>Lokasi</th>
                            <th>IP Address</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                        </thead>
                        <tbody>
                            @foreach ($komputers as $komputer)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $komputer->hostname }}</td>
                                    <td>{{ $komputer->manufacture }}</td>
                                    <td>{{ $komputer->productname }}</td>
                                    <td>{{ $komputer->sn }}</td>
                                    <td>{{ $komputer->snbios }}</td>
                                    <td>{{ $komputer->lokasi }}</td>
                                    <td>{{ $komputer->ipaddress }}</td>
                                    <td>{{ $komputer->created_at }}</td>
                                    <td>{{ $komputer->updated_at }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
              </div>
            </div>

          </div>
    </section>
@endsection
@section('scripts')
<script>

      $(document).ready(function() {
        $('#myTable').DataTable();

    });


</script>
@endsection
