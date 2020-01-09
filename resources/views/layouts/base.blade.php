<!DOCTYPE html>
<html>
  <head>
    <title>Медэлектроника 2020</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
        <div class="top_box">
          <div class="logo_box">
            <img class="logo" src="img/logo.png">
            <div>
              <p class="logo_title">
                Медэлектроника 2020
              </p>
              <p class="data">08.11.2020 - 09.11.2020</p>
            </div>
          </div>
            <div class="finde">
              <input type="text" value="">
              <img src="img/find.png">
            </div>
        </div>

        <div class="menu">
          <ul>
            <li> <a href="page.html">Главная</a></li>
            <li><a href="page.html">Организаторы</a></li>
            <li><a href="page.html">Требования</a></li>
            <li><a href="page.html">Контакты</a></li>
            <li><a href="page.html">Программа</a></li>
            <li><a href="page.html">Условия участия</a></li>
          </ul>
		  
		  <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
		  
        </div>
    </header>

    <div class="content">
      @yield('content')
    </div>

    <footer>
      <div class="info">
        <p>Белорусский государственный университет<br> информатики и радиоэлектроники</p>
        <p><em>Республика Беларусь, г. Минск, П.Бровки 6</em></p>
        <p>разработка: © ЦИИР БГУИР, 2002-2020</p>
      </div>
      <div class="networks">
        <p>Мы в соцсетях:</p>
        <div class="">
          <a href="#"><img src="img/vk.png"></a>
          <a href="#"><img src="img/tv.png"></a>
        </div>
      </div>
      <div class="baners">
        <a href="#"><img src="img/b1.png"></a>
        <a href="#"><img src="img/b2.png"></a>
        <a href="#"><img src="img/b3.png"></a>
        <a href="#"><img src="img/b4.png"></a>
        <a href="#"><img src="img/b5.png"></a>
        <a href="#"><img src="img/b1.png"></a>
      </div>
    </footer>
  </body>
</html>
