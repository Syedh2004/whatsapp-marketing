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

    @can('send-message')
        <li class="{{ ( Route::current()->getName() == "send-message.index" ) ? 'main-nav--active' : '' }}" >
            <a class="main-nav__link" href="{{ route('send-message.index') }}">
                <span class="main-nav__icon">
                    <i class="pe-7f-edit"></i>
                </span>
                Send Message
            </a>
        </li>
    @endcan
</ul>
