  <!--== Start Header Wrapper ==-->
  <header class="header-area transparent">
    <div class="container">
      <div class="row no-gutter align-items-center position-relative">
        <div class="col-12">
          <div class="header-align">
            <div class="header-align-start">
              <div class="header-logo-area">
                <a href="{{ route('listing.index') }}">
                  <img class="logo-main" src="{{ asset('theme/assets/img/logo-light.png') }}" alt="Logo" />
                  <img class="logo-light" src="{{ asset('theme/assets/img/logo-light.png') }}" alt="Logo" />
                </a>
              </div>
            </div>
            <div class="header-align-center">
              <div class="header-navigation-area position-relative">
                <ul class="main-menu nav">
                  <li><a href="{{ route('home') }}"><span>Home</span></a></li>
                  <li><a href="{{ route('listing.index') }}"><span>Gigs</span></a></li>
                  <li><a href="contact.html"><span>Contact</span></a></li>
                </ul>
              </div>
            </div>
            <div class="header-align-end">
              <div class="header-action-area">
                <a class="btn-registration btn-registration-green" href="{{ route('listing.create') }}"><span>+</span> Create post Job</a>
                @auth
                <div class="dropdown d-inline-block">
                  <a class="btn btn-primary dropdown-toggle btn-registration" style="line-height: 35px;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Hello {{ Auth::user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li><button class="dropdown-item" type="submit">Logout</button></li>
                  </form>
                  </ul>
                </div>
                @else
                <a href="/login" type="button" class="btn btn-primary btn-reg" style="line-height: 35px;">Sign in</a>
                @endauth
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->