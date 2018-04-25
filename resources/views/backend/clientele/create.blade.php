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
                        <li><a href="{{route('slider.index')}}">Clientele</a></li>
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
                          <form action="{{ route('clientele.store') }}" method="POST" enctype="multipart/form-data" file="true">
                            {{csrf_field()}}
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
                              <label for="logo" class="col-sm-2 col-form-label">Image</label>
                              <div class="col-sm-8">
                                <input type="file" name="logo" class="form-control" id="logo" required="">
                                {{-- <div class="dropzone" data-width="500" data-height="300" data-resize="true" data-url="canvas.php" style="width: 100%;">
                                  <input type="file" name="logo" class="form-control" id="logo" required=""/>
                                </div> --}}
                                @if ($errors->has('logo'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('logo') }}</strong>
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
{{-- <script type="text/javascript">
    $('.dropzone').html5imageupload();
</script> --}}
@endsection