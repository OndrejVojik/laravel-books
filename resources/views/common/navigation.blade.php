    <nav>
        <a href="{{route('homepage')}}">
            @if ($current_menu_item === 'homepage')
                <strong>Home</strong>
            @else
                Home
            @endif
            
        </a>

        <a href="{{route('about-us')}}">
            @if ($current_menu_item === 'about-us')
                <strong>About</strong>
            @else
                About
            @endif
        </a>

        @guest
            <a href="{{'login'}}">Log in</a>
            <a href="{{'register'}}">Register</a>
        @endguest

        @auth

            Logged in as {{auth()->user()->email}} &nbsp;
            <form action="{{ route('logout') }}" method="post">
 
            @csrf
 
            <button>Logout</button>
 
            </form>
        @endauth

        
        
    </nav>

