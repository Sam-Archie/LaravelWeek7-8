
<nav class="mt-4 navbar navbar-light bg-light">
    <a class="navbar-brand" href="">Home</a>
    <a class="navbar-brand" href="#">Contact</a>
    <a class="navbar-brand" href="#">About</a>
    <a class="navbar-brand" href="/owners">Owners</a>
    @if (!Auth::check())
    <a class="navbar-brand" href="/login">Login</a>
    @endif
     @if (Auth::check())
    <a class="navbar-brand" href="/logout">Log-Out</a>
    @endif
</nav>

