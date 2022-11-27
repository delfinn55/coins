@extends('_public.layout.base')

@section('content')
<main class="register-form">
    <div class="form-wrapper ml-auto mr-auto">
        <h3>Register form</h3>
        <form class="form" action="{{ route('register') }}" method="post">
            @csrf
            <div class="input-wrapper">
                <label class="input-label" for="email">Email</label>
                <input id="email"  type="text" name="email">
            </div>
            <div class="input-wrapper">
                <label class="input-label" for="name">Name</label>
                <input id="name"  type="text" name="name">
            </div>
            <div class="input-wrapper">
                <label class="input-label" for="username">Password</label>
                <input id="password"  type="password" name="password">
            </div>
            <div class="input-wrapper">
                <label class="input-label" for="password_confirmation" class="label">Confirm</label>
                <input type="password" id="password_confirmation" class="input" name="password_confirmation">
            </div>
            <div class="btn-wrapper">
                <button class="btn btn-submit" type="submit">Register</button>
            </div>
        </form>

        @include('_public.components.validation-errors')
    </div>
</main>
@endsection
