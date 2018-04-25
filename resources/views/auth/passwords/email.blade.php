@extends('frontend.layouts.main')
@section('content')
    <section class="ref-from-area overflow-fix" style="margin-top: 100px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form class="ref-from overflow-fix" method="POST" action="{{ route('password.email') }}">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
              <h2 class="reg-from-title">Reset Password</h2>
              <div class="single-field-are overflow-fix form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <p>Email</p>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required="" autofocus="" />
                    @if ($errors->has('email'))
                        <span class="help-block alert-message-style">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
              </div>
              <button type="submit">Send to Email</button>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
