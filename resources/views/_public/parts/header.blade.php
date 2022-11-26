<div id="header">
    @auth
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}">login</a>
        --------
        <a href="{{ route('register') }}">register</a>
    @endauth
</div>
