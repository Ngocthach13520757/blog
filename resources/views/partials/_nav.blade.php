
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('blogs') ? 'active' : ''}}" href="{{route('blog.index')}}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('about') ? 'active' : ''}}" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="{{route('contact')}}">Contact</a>
            </li>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            @if (Auth::check())
                <li class="nav-item dropdown mr-auto">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('posts.index')}}">Post</a>
                        <a class="dropdown-item" href="{{route('categories.index')}}">Categories</a>
                        <a class="dropdown-item" href="{{route('tags.index')}}">Tags</a>
                        <div role="separator" class="divider"></div>
                        <div>
                            <a class="dropdown-item" href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </li>
            @else
                <a href="{{route('login')}}" class="btn btn-outline-primary">Login</a>
            @endif
        </ul>
    </div>
</nav>
<br>
<br>