@extends('_public.layout.base')

@section('content')
<ul class="">
    @foreach ($errors->all() as $error)
        <li>{!! $error !!}</li>
    @endforeach
</ul>

<main class="login-form">
    <div class="cotainer">
        <h3 class="card-header text-center">Login form</h3>
        <div class="card-body">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-wrapper">
                    <label for="name">Username</label>
                    <input id="name"  type="text" name="name">
                </div>
                <div class="input-wrapper">
                    <label for="username">Password</label>
                    <input id="password"  type="password" name="password">
                </div>
                <button type="submit">Login</button>
            </form>
            <div class="auth-actions">
                <a href="{{ route('register') }}">Registration</a>
            </div>
        </div>
    </div>
</main>
@endsection
