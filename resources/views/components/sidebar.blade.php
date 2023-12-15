<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main Menu</li>
            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ url('/') }}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i>
                    <span>User</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('users') ? 'active' : '' }}">
                        <a href="{{ url('users') }}">List User</a>
                    </li>
                    <li class="{{ Request::is('users/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('users/create') }}">Add New User</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i>
                    <span>Product</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('products') ? 'active' : '' }}">
                        <a href="{{ url('products') }}">List Product</a>
                    </li>
                    <li class="{{ Request::is('products/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('products/create') }}">Add New Product</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>