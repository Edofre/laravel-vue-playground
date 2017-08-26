@extends('layouts.auth')

@section('content')
    <div class="column is-half is-offset-one-quarter">
        <div class="tile is-parent">
            <article class="tile is-child notification">
                <p class="title">Reset Password</p>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <div class="field">
                        <label for="email" class="label">E-Mail address</label>
                        <div class="control">
                            <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-error' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail address">
                        </div>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-primary">Send Password Reset Link</button>
                        </div>
                    </div>
                </form>
            </article>
        </div>
    </div>
@endsection