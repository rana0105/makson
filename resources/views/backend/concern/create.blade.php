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
                        <li><a href="{{route('concern.index')}}">Slider</a></li>
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
                          <form action="{{ route('concern.store') }}" method="POST" enctype="multipart/form-data" file="true">
                            {{csrf_field()}}
                            <div class="form-group row">
                              <label for="name" class="col-sm-2 col-form-label">Company Name</label>
                              <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Company Name" required="">
                                @if ($errors->has('name'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="description" class="col-sm-2 col-form-label">Description</label>
                              <div class="col-sm-8">
                                <textarea name="description" id="description" cols="30" class="form-control" rows="5" placeholder="Description"></textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                              <div class="col-sm-8">
                                <input type="file" name="logo" class="form-control" id="inputImage" required="">
                                @if ($errors->has('logo'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('logo') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="on_hover_logo" class="col-sm-2 col-form-label">On Hover Logo</label>
                              <div class="col-sm-8">
                                <input type="file" name="on_hover_logo" class="form-control" id="on_hover_" required="">
                                @if ($errors->has('on_hover_logo'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('on_hover_logo') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="image" class="col-sm-2 col-form-label">Image</label>
                              <div class="col-sm-8">
                                <input type="file" name="image" class="form-control" id="image" required="">
                                @if ($errors->has('image'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('image') }}</strong>
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