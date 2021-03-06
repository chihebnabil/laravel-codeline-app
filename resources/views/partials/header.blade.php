<header id="header" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{ route('home') }}" class="logo">Films App</a>
            </div>

            <div class="col-auto">
                @if(Auth::check())
                    <div class="dropdown">
                        <b class="user-name dropdown-toggle"
                           data-toggle="dropdown"><span class="align-top">{{ Auth::user()->name }}</span></b>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:document.getElementById('logout').submit();">Log Out</a>
                        </div>
                        <form hidden style="display:none!important" id="logout" method="post" action="{{ route('logout') }}"><input type="submit">{{ csrf_field() }}</form>
                    </div>
                @else
                    <a href="{{ route('login') }}">{{ __("Sign In") }}</a> /
                    <a href="{{ route('register') }}">{{ __("Sign Up") }}</a>
                @endif
            </div>

        </div>
    </div>
</header>