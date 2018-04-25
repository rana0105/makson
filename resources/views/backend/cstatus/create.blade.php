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
                        <li><a href="{{route('cstatus.index')}}">Compliance Status</a></li>
                        <li class="active">Create</li>
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
                            <strong class="card-title">Create</strong>
                        </div>
                        <div class="card-body">
                          <form action="{{ route('cstatus.store') }}" method="POST" enctype="multipart/form-data" file="true">
                            {{csrf_field()}}
                            <div class="form-group row">
                              <label for="company" class="col-sm-2 col-form-label">Company Name</label>
                              <div class="col-sm-8">
                                <select name="company" class="form-control" id="company" required="">
                                    @foreach(config('company.reverse_company') as $key => $company)
                                        <option value="{{ $key }}">{{ $company }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('company'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="year" class="col-sm-2 col-form-label">Year</label>
                              <div class="col-sm-8">
                                <select class="form-control year" name="year" title=" " required="" style="margin-bottom: 2%;">
                                    @for($i = 2000; $i <= 2050; $i++)
                                        <option value="{{$i}}"
                                        @if($i == date('Y'))
                                        selected=""
                                        @endif
                                        >{{$i}}</option>
                                    @endfor
                                </select>
                                @if ($errors->has('year'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="title" class="col-sm-2 col-form-label">Title</label>
                              <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title" required="">
                                @if ($errors->has('title'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="file" class="col-sm-2 col-form-label">Logo</label>
                              <div class="col-sm-8">
                                <input type="file" name="file" class="form-control" id="file" required="">
                                @if ($errors->has('file'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Create</button>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript">
</script>
@endsection