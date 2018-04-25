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
                        <li class="active">Concern</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Success!</strong> {{ session('success') }}.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif
                    @if(session('danger'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Deleted!</strong> {{ session('danger') }}.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><a href="{{ route('concern.create') }}">Create</a></strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Logo</th>
                                    <th>On Hover Logo</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($concerns as $concern)
                                  <tr>
                                    <td>{{ $concern->name }}</td>
                                    <td>{!! str_limit(strip_tags($concern->description), 30) !!}
                                    </td>
                                    <td>
                                        <img src="{{ asset('/uploads/'. $concern->logo) }}" alt="{{ $concern->logo }}" width="40" height="40" class="img img-thumbnail">
                                    </td>
                                    <td>
                                        <img src="{{ asset('/uploads/'. $concern->on_hover_logo) }}" alt="{{ $concern->on_hover_logo }}" width="40" height="40" class="img img-thumbnail">
                                    </td>
                                    <td>
                                        <img src="{{ asset('/uploads/'. $concern->image) }}" alt="{{ $concern->image }}" width="40" height="40" class="img img-thumbnail">
                                    </td>
                                    <td>

                                        <a href="{{ route('concern.edit', $concern->id) }}">
                                            <button class="btn btn-style btn-small btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        </a>
                                        {!! Form::open(['route' => ['concern.destroy', $concern->id ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ])!!}
                                            <button class="btn btn-style btn-small btn-danger delete-btn"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                       {!! Form::close() !!}
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
    </div>
@endsection