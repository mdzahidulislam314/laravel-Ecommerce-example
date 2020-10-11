<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle d-flex">
        <i class="hamburger align-self-center"></i>
    </a>
    <form class="form-inline d-none d-sm-inline-block">
        <div class="input-group input-group-navbar">
            <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
            <div class="input-group-append">
                <button class="btn" type="button">
                    <i class="align-middle" data-feather="search"></i>
                </button>
            </div>
        </div>
    </form>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>
                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                    @if (isset(Auth::user()->image))
                        <img src="{{ url(Auth::user()->image) }}" class="avatar img-fluid rounded mr-1" alt="Charles Hall" />
                    @endif
                    <span class="text-dark">{{ Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i> Settings</a>
                    <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="align-middle mr-1" data-feather="log-out"></i>Log out</a>

                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>