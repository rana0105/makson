{{-- @extends('frontend.layouts.main')
@section('content')
    <section class="ref-from-area overflow-fix" style="margin-top: 100px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form class="ref-from overflow-fix" method="POST" action="{{ route('login') }}">
            	<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              <h2 class="reg-from-title">LOGIN</h2>
              @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif
              @if(session('warning'))
                <div class="alert alert-success">
                  {{ session('warning') }}
                </div>
              @endif
              @if(session('error'))
                <div class="alert alert-danger">
                  {{ session('error') }}
                </div>
              @endif
              <div class="single-field-are overflow-fix form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <p>Email</p>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus />
					       @if ($errors->has('email'))
	                    <span class="help-block alert-message-style">
	                        <strong>{{ $errors->first('email') }}</strong>
	                    </span>
	                @endif
              </div>
              <div class="single-field-are overflow-fix form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <p>Password</p>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required/>
					       @if ($errors->has('password'))
                    <span class="help-block alert-message-style">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <button type="submit">Login</button>
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  Forgot Your Password?
              </a>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
 --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Maksons</title>
  <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <style>
    html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #fff;
}
.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #e21838;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0);
}
.btn-primary.focus, .btn-primary:focus {
    box-shadow: 0 0 0 0.2rem #e21838 !important;
}
button.btn.btn-lg.btn-primary.btn-block {
    border-width: 1px;
    -webkit-transition: .5s;
    -o-transition: .5s;
    margin-top: 10px;
    transition: .5s;
    border-color: #e21838;
    border-style: solid;
    width: 55%;
    height: 40px;
    background: transparent;
    color: #e21838;
    cursor: pointer;
    padding: 0;
    font-size: 15px;
    border-radius: 0;
    margin: 0 auto;
    margin-top: 20px;
}
a {
  color: #e21838;
}
form.form-signin h1 {
    font-size: 23px;
    margin-bottom: 30px !important;
}

form.form-signin input {
    border-radius: 0;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
  </style>

  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="{{ route('login') }}">
      <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="email" class="sr-only">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus />
       @if ($errors->has('email'))
            <span class="help-block alert-message-style">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required/>
      @if ($errors->has('password'))
        <span class="help-block alert-message-style">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
      @endif
      <p><a href="{{ route('password.request') }}">forgot password</a></p>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; Maksons group - 2018</p>
    </form>
  </body>
</html>
