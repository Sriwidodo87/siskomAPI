<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">IT Infrastruktur </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">IT </a>
        </div>
        <ul class="sidebar-menu">
             {{-- <li class="menu-header">Dashboard</li> --}}
            <li class="dropdown {{ request()->routeIs('home') ? 'active':'' }}">
                <a href="{{ route('home') }}" class="nav-link"><i class="fa fa-list-alt"></i><span>Dashboard</span></a>
            </li>
             {{-- <li class="menu-header">Distribusi</li> --}}
            <li class="dropdown {{ request()->is('distribusi/*') || request()->is('distribusi') ? 'active':'' }}">
                <a href="{{ route('distribusi.index') }}" class="nav-link"><i class="fa fa-truck"></i><span>Distribusi</span></a>
            </li>
        </ul>
    </aside>
</div>
