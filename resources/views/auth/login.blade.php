@extends('layouts.app')

@section('content')
<div class="section">
    <div class="column is-half is-offset-one-quarter">
        <div class="container">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        {{ __('Login') }}
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="field">
                                <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    @error('email')
                                        <span class="icon is-small is-right">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="field">
                                <label for="password" class="label">{{ __('Password') }}</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="current-password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    @error('password')
                                        <span class="icon is-small is-right">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-primary" type="submit">{{ __('Login') }}</button>
                                </div>
                                <div class="control">
                                    @if (Route::has('password.request'))
                                        <button class="button is-text">{{ __('Forgot Your Password?') }}</button>
                                    @endif
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
