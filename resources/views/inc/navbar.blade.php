
     <nav class="navbar navbar-expand-md  navbar-laravel navbar-dark  " style=" background-color: #5A2971;
     left: 0;
     top: 0;
     width: 100%;
     " >
      <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}" style="padding: 4px;margin:auto">
                <img src="SPEDEMY/logo.png" style="height: 35px; padding: 0 auto;">  {{ config('app.name', 'Laravel') }}
            </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">

              </ul>



              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @else
                      <ul class="nav-item dropdown">

                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>


                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <li><a href="/manage" class="dropdown-item" >MANAGE</a></li>

                                {{-- -----main menu --}}
                                <li><a href="/category_menu" class="dropdown-item" >Main Menu</a></li>


                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
                              {{-- ----logout button in dropdown --}}

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                        </ul>
                  @endguest
              </ul>
          </div>
      </div>
  </nav>
