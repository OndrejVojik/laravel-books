    <nav class="top-menu">
        <a 
            href="{{route('homepage')}}"
            class="top-menu__item{{$current_menu_item === 'homepage' ? ' top-menu__item--highlighted' : ''}}"
        >
                Home
        </a>

        <a 
            href="{{route('about-us')}}"
            class="top-menu__item{{$current_menu_item === 'about-us' ? ' top-menu__item--highlighted' : ''}}"
        >
                About
        </a>

        @can('admin')
            <a 
                href="{{route('admin.books')}}"
                class="top-menu__item"
            >
                    Books administration
            </a>
        @endcan
       

        @guest
            <a 
            href="{{'login'}}"
            class="top-menu__item top-menu__item--pull--rigth{{$current_menu_item === 'login' ? ' top-menu__item--highlighted' : ''}}"
            >
            Log in
            </a>
            <a 
            href="{{'register'}}"
            class="top-menu__item{{$current_menu_item === 'register' ? ' top-menu__item--highlighted' : ''}}"
            >
            Register
            </a>
        @endguest

        @auth

        <span class="top-menu__item top-menu__item--pull--rigth">

            Logged in as {{auth()->user()->email}} &nbsp;
            <form action="{{ route('logout') }}" method="post">
 
            @csrf
 
            <button>Logout</button>
 
            </form>
        </span>
            
        @endauth

        
        
    </nav>

