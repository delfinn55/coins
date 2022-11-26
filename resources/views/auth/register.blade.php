<ul class="">
    @foreach ($errors->all() as $error)
        <li>{!! $error !!}</li>
    @endforeach
</ul>

<main class="login-form">
    <div class="cotainer">
        <h3 class="card-header text-center">Register form</h3>
        <div class="card-body">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="input-wrapper">
                    <label for="email">Email</label>
                    <input id="email"  type="text" name="email">
                </div>
                <div class="input-wrapper">
                    <label for="name">Name</label>
                    <input id="name"  type="text" name="name">
                </div>
                <div class="input-wrapper">
                    <label for="username">Password</label>
                    <input id="password"  type="password" name="password">
                </div>
                <div class="input-wrap">
                    <label for="password_confirmation" class="label">Confirm</label>
                    <input type="password" id="password_confirmation" class="input" name="password_confirmation" required>
                </div>
                <button type="submit">Register</button>
            </form>
            <div class="auth-actions">
                <a href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </div>
</main>
