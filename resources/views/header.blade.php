<header>
    <nav class="navbar navbar-default ">
        <div class="container-fluid col-md-11 col-md-offset-1">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="" href="{{url('/')}}">GPU INTELLIGENCE</a>
            </div>
            @if (!Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @elseif(Auth::check())
                <div class="top-right links">
                    <a href="{{url('/home')}}">Profile</a>
                    <a href="{{route('logout')}}">Logout</a>
                </div>
            @endif


        </div><!-- /.container-fluid -->
    </nav>
</header>