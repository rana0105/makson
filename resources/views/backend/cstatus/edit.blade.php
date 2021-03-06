@extends('backend.layouts.dashboard')
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li><a href="{{route('areport.index')}}">areport</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Edit</strong>
                        </div>
                        <div class="card-body">
                          {!! Form::open(['route' => ['areport.update', $areport->id ], 'method' => 'PUT', 'enctype'=>'multipart/form-data', 'file'=>'true' ])!!}
                            {{csrf_field()}}
                            <div class="form-group row">
                              <label for="name" class="col-sm-2 col-form-label">Title</label>
                              <div class="col-sm-8">
                                <select name="company" id="company" class="form-control">
                                    @foreach(config('company.reverse_company') as $key => $company)
                                        <option value="{{ $key }}" {{ $key == $areport->company ? 'selected':'' }}>{{ $company }}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="title" class="col-sm-2 col-form-label">Title</label>
                              <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" id="title" value="{{ $areport->title }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="file" class="col-sm-2 col-form-label">Logo</label>
                              <div class="col-sm-8">
                                <input type="file" name="file" class="form-control" id="file">
                                <a style="margin-top: 3px;" href="{{ asset('/uploads/'. $areport->file) }}">PDF File</a>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                            </div>
                          {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection