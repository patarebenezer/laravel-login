@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-box">
        <h2 class="login-header">{{ __('Silakan Login') }}</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="error-message">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="error-message">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <button type="submit" class="login-button">{{ __('Login') }}</button>
        </form>
    </div>
</div>
@endsection