@extends('layouts.app')

@section('content')
<div class="registration-container">
  <div class="dropin-container">
    <div style="align-self: center; margin-top: 4rem">
      <span style="font-size: 1.5rem"> Create an account </span>
    </div>
    <div>
      <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="d-flex flex-column">
          
        <input id="email" type="email" name="email" placeholder="email" value="{{ old('email') }}" required>
          @if ($errors->has('email'))
          <span class="error">
          {{ $errors->first('email') }}
          </span>
          @endif

          <input id="password" type="register_password" name="password" placeholder="password" required>
          @if ($errors->has('password'))
            <span class="error">
                {{ $errors->first('password') }}
            </span>
          @endif

          <input id="password-confirm" type="register_password" name="password_confirmation" placeholder="confirm password" required>

          <input id="name" type="register_text" name="name" placeholder="name" value="{{ old('name') }}" required autofocus>
          @if ($errors->has('name'))
            <span class="error">
                {{ $errors->first('name') }}
            </span>
          @endif

          <input id="phone_number" type="register_text" name="phone_number" placeholder="phone number">

          <div class="d-flex flex-row justify-content-between">
            <input id="nif" type="register_text_half" name="nif" placeholder="tax number">

            <input id="city" type="register_text_half" name="city" placeholder="city" value="{{ old('city') }}" required>
            @if ($errors->has('city'))
              <span class="error">
                  {{ $errors->first('city') }}
              </span>
            @endif
          </div>

          <input id="address" type="register_text" name="address" placeholder="adress" value="{{ old('address') }}" required>
          @if ($errors->has('address'))
            <span class="error">
                {{ $errors->first('address') }}
            </span>
          @endif

          <input id="country" type="register_text" name="country" placeholder="country" value="{{ old('country') }}" required>
          @if ($errors->has('country'))
            <span class="error">
                {{ $errors->first('country') }}
            </span>
          @endif
          <div class="d-flex align-items-center flex-column">
            <button style="background-color: #637CFF; color: white; margin-top: 2rem; width: 75%;" type="submit" class="btn btn-primary btn-sm" type="submit">
              Sign Up
            </button>  
            <p style="color: #696969; font-size: 0.8rem; margin: 0.5rem"> Already have an account <a href="{{ route('login') }}">Sign In </a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
