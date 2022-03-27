<a href="{{'/'}}">Welcome</a>
@auth
<a href="/Home">Home</a>
<a href="/logout">Log out</a>
@else
<a href="{{'login'}}">log In</a>
<a href="{{'register'}}">Register</a>
@endauth
