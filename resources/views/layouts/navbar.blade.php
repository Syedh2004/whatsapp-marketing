<ul class="main-nav">
    <li class="{{ ( Route::current()->getName() == "dashboard" ) ? 'main-nav--active' : '' }}">
        <a class="main-nav__link" href="/">
            <span class="main-nav__icon">
                <i class="pe-7f-home"></i>
            </span>
            Dashboard
        </a>
    </li>

    @can('users')
        <li class="{{ ( Route::current()->getName() == "users" ) ? 'main-nav--active' : '' }}" >
            <a class="main-nav__link" href="/users">
                <span class="main-nav__icon">
                    <i class="pe-7f-edit"></i>
                </span>
                Manage Users
            </a>
        </li>
    @endcan

    @can('roles')
        <li class="{{ ( Route::current()->getName() == "roles.index" ) ? 'main-nav--active' : '' }}" >
            <a class="main-nav__link" href="{{ route('roles.index') }}">
                <span class="main-nav__icon">
                    <i class="pe-7f-edit"></i>
                </span>
                Manage Roles
            </a>
        </li>
    @endcan

    @can('whatsapp-number')
        <li class="{{ ( Route::current()->getName() == "whatsapp-number.index" ) ? 'main-nav--active' : '' }}" >
            <a class="main-nav__link" href="{{ route('whatsapp-number.index') }}">
                <span class="main-nav__icon">
                    <i class="pe-7f-edit"></i>
                </span>
                Whatsapp Number
            </a>
        </li>
    @endcan

    <li class="main-nav--collapsible">
        <a class="main-nav__link" href="#" onclick="return false;">
            <span class="main-nav__icon">
                <i class="pe-7f-monitor"></i>
            </span>
            Sample pages <span class="badge badge--line badge--blue">2</span>
        </a>
        <ul class="main-nav__submenu">
            <li>
                <a href="404.html">
                    <span>Error 404</span></a>
            </li>
            <li>
                <a href="login.html">
                    <span>Login</span></a>
            </li>
        </ul>
    </li>
    <li>
        <a class="main-nav__link" href="grid.html">
            <span class="main-nav__icon">
                <i class="pe-7f-browser"></i>
            </span>
            Grid Layout
        </a>
    </li>
    <li>
        <a class="main-nav__link" href="tables.html">
            <span class="main-nav__icon">
                <i class="pe-7f-note"></i>
            </span>
            Tables &amp; forms
        </a>
    </li>
    <li>
        <a class="main-nav__link" href="stats.html">
            <span class="main-nav__icon">
                <i class="pe-7f-graph3"></i>
            </span>
            Statistics
        </a>
    </li>
    <li>
        <a
            class="main-nav__link" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="main-nav__icon">
                <i class="pe-7f-user"></i>
            </span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            Logout
        </a>
    </li>
</ul>
