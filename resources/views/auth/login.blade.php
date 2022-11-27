@extends('_public.layout.base')

@section('content')
<main class="login-form">
    <div class="form-wrapper ml-auto mr-auto">
        <h3>Login form</h3>
        <form class="form" action="{{ route('login') }}" method="post">
            @csrf
            <div class="input-wrapper">
                <label class="input-label" for="email">Email</label>
                <input id="email"  type="email" name="email">
            </div>
            <div class="input-wrapper">
                <label class="input-label" for="username">Password</label>
                <input id="password"  type="password" name="password">
            </div>
            <div class="btn-wrapper">
                <button class="btn btn-submit" type="submit">Login</button>
            </div>
        </form>

        @include('_public.components.validation-errors')
    </div>
</main>
@endsection
