<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="{{ route('home') }}">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Posts">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-pencil"></i>
            <span class="nav-link-text">Agenda</span>
          </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti">
                <li>
                    <a href="post-index.html">Agenda</a>
                </li>
                <li>
                    <a href="post-create.html">Tambah Baru New</a>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for...">
                    <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
        </li>
        @if (Auth::guest())
        <li class="nav-item">
            <a href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('register') }}">Register</a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-sign-out"></i>Logout
            </a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        @endif
    </ul>
</div>