@extends('frontend.layouts.main')

@section('content')
<section class="ref-from-area overflow-fix" style="margin-top: 100px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="ref-from overflow-fix" method="POST" action="{{ route('register') }}">
          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
          <h2 class="reg-from-title">REGISTRATION</h2>
          <input type="hidden" name="link" value="{{ str_random(30) }}">
          <div class="single-field-are overflow-fix form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <p>Name</p>
            <input type="text" id="name" name="name" class="form-control" placeholder="Name......" required autofocus />
              @if ($errors->has('name'))
                  <span class="help-block alert-message-style">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
          <div class="single-field-are overflow-fix form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <p>Email</p>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus />
              @if ($errors->has('email'))
                  <span class="help-block alert-message-style">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
          <div class="single-field-are overflow-fix form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <p>Password</p>
            <input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}" required/>
             @if ($errors->has('password'))
                <span class="help-block alert-message-style">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="single-field-are overflow-fix form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <p>Password</p>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password" required/>
             @if ($errors->has('password_confirmation'))
                <span class="help-block alert-message-style">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
          </div>
          <button type="submit">Registration</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
	
