<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">
                zidisha
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('lend:index') }}">Lend</a></li>
                <li><a href="#">Borrow</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Learn More <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Member Updates &amp; Photos</a></li>
                        <li><a href="{{ route('page:our-story') }}">Our Story</a></li>
                        <li><a href="{{ route('page:why-zidisha') }}">Why Zidisha?</a></li>
                        <li><a href="{{ route('page:how-it-works') }}">How It Works</a></li>
                        <li><a href="{{ route('page:trust-and-security') }}">Trust &amp; Security</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Statistics</a></li>
                        <li><a href="{{ route('page:press') }}">Press</a></li>
                    </ul>
                </li>
                @if(Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        My Account <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('lender:public-profile') }}">View My Public Profile</a></li>
                        <li><a href="#">Edit Profile</a></li>
                    </ul>
                </li>
                @endif
            </ul>
            <form class="navbar-form navbar-left">
                @if(Auth::check())
                    <a href="{{ route('logout') }}" class="btn btn-primary">
                        Log out
                    </a>
                @else
                    <a href="{{ route('logout') }}" class="btn btn-primary" data-toggle="modal" data-target="#LoginModal">
                        Log in
                    </a>
                @endif
            </form>
        </div>
    </div>
</div>
