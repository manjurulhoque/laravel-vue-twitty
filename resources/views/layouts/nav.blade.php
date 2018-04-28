<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Lara-Twitty
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                <li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i>Notification</a></li>
                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Messages</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li>
                        <form action="" class="navbar-form">
                            <div class="form-group">
                                <input type="text" placeholder="Search" class="search form-control"/>
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <div class="search-result"></div>
                            </div>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           aria-haspopup="true">
                            <img class="img-thumbnail" width="30px" height="30px" src="{{ Auth::user()->profile_image }}"/><span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="">
                                    {{ Auth::user()->username }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <label class="tweet-btn">Tweet</label>
                        </a>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>