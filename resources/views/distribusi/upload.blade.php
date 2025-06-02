@extends('layouts.master')
@section('title', 'Upload | Distribusi')
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
                                    <a class="btn btn-primary" href="{{ route('distribusi.index') }}"> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    @if (count($errors) > 0)
                      <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                           @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>.
                           @endforeach
                        </ul>
                      </div>
                    @endif
                        <form action="{{ route('distribusi.update_upload',$Distribusi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                         @method('PUT')
                        <div class="card-body ">
                            <input type="hidden" name="id" value="{{$Distribusi->id}}">
                            <div class="row">
                             <div class="form-group col-4 ">
                                <label>File Upload</label>
                                <input type="file" name="uploads" id="uploads" class="form-control" >
                            @error('uploads')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
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
