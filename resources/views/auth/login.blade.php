@extends('layouts.auth')

@section('content')
    <div class="column is-half is-offset-one-quarter">
        <div class="tile is-parent">
            <article class="tile is-child notification">
                <p class="title">Login</p>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="field">
                        <label for="email" class="label">E-Mail address</label>
                        <div class="control">
                            <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-error' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail address">
                        </div>
                        @if ($errors->has('email'))
                            <p class="help is-danger">This email is invalid</p>
                        @endif
                    </div>

                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <div class="control">
                            <input id="password" type="password" class="input {{ $errors->has('password') ? ' is-error' : '' }}" name="password" value="{{ old('password') }}" required autofocus placeholder="Password">
                        </div>
                        @if ($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-primary">Login</button>
                        </div>
                        <div class="control">
                            <a class="button is-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </article>
        </div>
    </div>
@endsection
