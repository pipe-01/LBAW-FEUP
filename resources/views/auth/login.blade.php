@extends('layouts.app')

@section('content')

<div class="registration-container" style="margin-bottom: 14rem;margin-top: 3rem;">
    <div class="dropin-container">
        <div style="align-self: center; margin-top: 5rem">
            <span style="font-size: 1.5rem"> Login </span>
        </div>
        <div>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="d-flex flex-column">
                    <input id="email" type="email" placeholder="email" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="error">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                    <input id="password" type="password" placeholder="password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="error">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                    <div class="d-flex flex-row justify-content-end" style="margin-top: 1em">
                        <a style="color: #696969; font-size: 0.8rem;" href="{{ route('password.request') }}">forgot password </a>
                    </div>
                    <button style="background-color: #637CFF; color: white; margin-top: 2rem" type="submit" class="btn btn-primary btn-sm" type="submit">
                    Log in
                    </button>
                    <div class="d-flex align-items-center flex-column">
                        <p style="color: #696969; font-size: 0.8rem; margin: 0.5rem" > Don't have and account? <a href="{{ route('register') }}">Sign Up </a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
