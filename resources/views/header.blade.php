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
                    <a href="{{ url('/getPDF') }}">PDF</a>
                </div>
            @elseif(Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/getPDF') }}">PDF</a>
                    <a href="{{url('/profile')}}">{{Auth::user()->name}}</a>
                    <a href="{{route('logout')}}">Logout</a>
                    <img class="smallavatar" src="{{asset('images/avatars')}}/{{Auth::user()->avatar}}" >
                </div>
            @endif


        </div><!-- /.container-fluid -->
    </nav>
</header>