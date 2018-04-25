
@extends('frontend.layouts.main')
@section('content')
    <section class="ref-from-area overflow-fix" style="margin-top: 100px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form class="ref-from overflow-fix" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="single-field-are overflow-fix form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <p>Email</p>
                        <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block alert-message-style">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="single-field-are overflow-fix form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <p>Password</p>
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block alert-message-style">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="single-field-are overflow-fix form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <p>Password Confirm</p>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block alert-message-style">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                </div>
                <button type="submit">Reset password</button>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection

