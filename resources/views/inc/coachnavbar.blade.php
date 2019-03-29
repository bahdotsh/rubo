<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->


              <a class="navbar-brand" href="{{url('/coach/dashboard')}}">
                  {{ config('app.name', 'Betterly') }}
              </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

          <ul class="navbar-nav navbar-right nav">
              <li><a href="/coach/dashboard">Dash</a></li>
              <li><a href="/coach/settings">Settings</a></li>
              <li><a href="/coach/chats">Chats</a></li>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login/Register</a></li>
            <!--        <li><a href="{{ route('register') }}">Register</a></li>  -->
                @else
                    <li class="dropdown">
                        <a href="/coach/dashboard" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <li class="dropdown">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </li>
                    </li>
                @endguest
            </ul>
          </ul>
        </div>
    </div>
</nav>
