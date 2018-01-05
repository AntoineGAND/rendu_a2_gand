<header>
    <div class="blog-masthead">
        <div class="container">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link active" href="{{route('home')}}">Home</a></li>

                @if(Auth::check())
                    <li class="nav-item"><a class="nav-link" href="{{route('publish')}}">Publish</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('chat')}}">Chat</a></li>
                    <li class="nav-item ml-auto"><a class="nav-link  ml-auto" href="#">{{Auth::user()->name}}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-auto" href="{{route('logout')}}">Logout</a></li>
                @else

                    <li class="nav-item ml-auto"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Register</a></li>

                @endif

            </ul>
        </div>
    </div>
</header>