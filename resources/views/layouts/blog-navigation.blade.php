{{-- <ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('posts.index') }}">Blog</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
</ul>

 --}}

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/img/logo.png" alt="" width="100px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      


      

      <div class="navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active text-info' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('about') ? 'active text-info' : '' }}" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('posts.*') ? 'active text-info' : '' }}" href="{{ route('posts.index') }}">Blog</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ request()->routeIs('show') ? 'active text-info' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Blog
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item {{ request()->routeIs('show') ? 'active text-info' : '' }}" href="{{ route('posts.index') }}">Post list</a></li>
              <li><a class="dropdown-item" href="{{ route('posts.create') }}">Create new post</a></li> 
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">other link</a></li>
            </ul>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> &nbsp;&nbsp;&nbsp; --}}

        
          {{-- Dark Mode  --}}
          <li class="nav-item align-items-center d-flex" >
            {{-- Sol --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun-fill" viewBox="0 0 16 16">
              <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"/>
            </svg>
            <!-- Default switch -->
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
              {{-- <label class="form-check-label" for="flexSwitchCheckDefault">Dark Mode</label> --}}
              
            </div>
            {{-- Luna --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
              <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
              <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
            </svg>
          </li>



          
      </div>
      @auth
      &nbsp;&nbsp;&nbsp;
      <x-dropdown>
          <div>
             <x-slot:trigger class="dropdown text-end">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://ui-avatars.com/api/?name={{  urlencode(Auth::user()->name) }}" alt="{{ Auth::user()->name }}" width="32" height="32" class="rounded-circle"><!-- https://github.com/mdo.png--->
                </a>
                </x-slot:trigger>
                <x-slot:content class="dropdown-menu text-small">
                 <x-dropdown-link class="dropdown-item" :href="route('dashboard')"> {{ __('Dashboard') }}</x-dropdown-link>
                 <x-dropdown-link class="dropdown-item" :href="route('profile.edit')"> {{ __('Profile') }}</x-dropdown-link>
                 <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <x-responsive-nav-link :href="route('logout')"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </x-responsive-nav-link>
              </form>
                </x-slot:content>
              </div>
        </x-dropdown>
      @else
        <x-dropdown>
          <x-slot:trigger>
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-lock-fill w-5 h-5" viewBox="0 0 16 16">
              <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2"/>
            </svg> --}}
            <button>
              <span class="material-symbols-outlined">
                lock
                </span>
            </button>
          </x-slot:trigger>
          <x-slot:content>
            <x-dropdown-link :href="route('login')">{{ __('Log In') }} </x-dopdown-link>
            <x-dropdown-link :href="route('register')">{{ __('Register') }} </x-dopdown-link>
          </x-slot:content>
        </x-dropdown>
      @endauth
     
          {{--   <x-dropdown>
              <x-slot:trigger>
                   <a class="nav-link dropdown-toggle {{ request()->routeIs('show') ? 'active text-info' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
                      </svg>
                    </a>
              </x-slot:trigger>
              <x-slot:content>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item {{ request()->routeIs('show') ? 'active text-info' : '' }}" href="{{ route('posts.index') }}">Post list</a></li>
                      <li><a class="dropdown-item" href="{{ route('posts.create') }}">Create new post</a></li> 
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">other link</a></li>
                    </ul>
              </x-slot:content>
            </x-dropdown> --}}
       


    </div>
  
  </nav>