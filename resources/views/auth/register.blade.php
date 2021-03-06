@extends('layouts.auth')

@section('content')
    <div class="column is-half is-offset-one-quarter">
        <div class="tile is-parent">
            <article class="tile is-child notification">
                <p class="title">Register</p>
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <div class="control">
                            <input id="name" type="text" class="input {{ $errors->has('name') ? ' is-error' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
                        </div>
                        @if ($errors->has('name'))
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>

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
                        <label for="password_confirmation" class="label">Password confirmation</label>
                        <div class="control">
                            <input id="password_confirmation" type="password" class="input {{ $errors->has('password_confirmation') ? ' is-error' : '' }}" name="password_confirmation" value="{{ old('password_confirmation') }}" required autofocus placeholder="Password confirmation">
                        </div>
                        @if ($errors->has('password_confirmation'))
                            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                        @endif
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-primary">Register</button>
                        </div>
                    </div>
                </form>
            </article>
        </div>
    </div>
@endsection