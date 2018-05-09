
        <!--navigation bar-->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Blog</a>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
                        <li class="{{Request::is('blogs') ? 'active' : ''}}"><a href="/blogs">Blog</a></li>
                        <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></a></li>
                        <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></a></li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        @if(Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{Auth::user()->name}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('posts.index')}}">Post</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @else
                            <a href="{{route('login')}}" class="btn btn-primary">Login</a>
                        @endif
                    </ul>
                </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>