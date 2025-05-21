<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            {{-- <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ request()->routeIs('home') ? 'active':'' }}">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown {{ request()->is('suppliers/*') || request()->is('suppliers') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Suppliers</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('supplier.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('supplier.create') }}">Add Supplier</a></li>
                    <li class="{{ request()->routeIs('supplier.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('supplier.index') }}">All Suppliers</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('customers/*') || request()->is('customers') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Customers</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('customer.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('customer.create') }}">Add Customer</a></li>
                    <li class="{{ request()->routeIs('customer.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('customer.index') }}">All Customers</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('category/*') || request()->is('category') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Category</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('category.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('category.create') }}">Add Category</a></li>
                    <li class="{{ request()->routeIs('category.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('category.index') }}">All Category</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('product/*') || request()->is('product') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-cart"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('product.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('product.create') }}">Add Product</a></li>
                    <li class="{{ request()->routeIs('product.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('product.index') }}">All Product</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('unit/*') || request()->is('unit') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-cart"></i><span>Unit</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('unit.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('unit.create') }}">Add Unit</a></li>
                    <li class="{{ request()->routeIs('unit.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('unit.index') }}">All Unit</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('purchase/*') || request()->is('purchase') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-cart"></i><span>Purchase</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('purchase.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('purchase.create') }}">New Purchase</a></li>
                    <li class="{{ request()->routeIs('purchase.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('purchase.index') }}">Purchase List</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('invoice/*') || request()->is('invoice') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-invoice"></i><span>Invoice</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('invoice.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('invoice.create') }}">New Invoice</a></li>
                    <li class="{{ request()->routeIs('invoice.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('invoice.index') }}">Invoice List</a></li>
                </ul>
            </li>
            <li class="dropdown {{ request()->is('reports/*') || request()->is('report') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-tasks"></i><span>Report</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('reports/invoice') ? 'active':'' }}"><a class="nav-link" href="{{ route('report', 'invoice') }}">Invoice Report</a></li>
                    <li class="{{ request()->is('reports/purchase') ? 'active':'' }}"><a class="nav-link" href="{{ route('report', 'purchase') }}">Purchase Report</a></li>
                </ul>
            </li> --}}
            {{-- tambahan  --}}
            {{-- <li class=""> --}}
                {{-- <a href="#" class="nav-link has-dropdown"><i class="fas fa-tasks"></i><span>Report</span></a> --}}
                {{-- <ul class="dropdown-menu"> --}}
            {{--
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else
                    @can('user-list')
                    <li class="{{ request()->routeIs('users.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-user"></i><span>Users</span></a></li>
                    @endcan

                     @can('role-list')
                     <li class="{{ request()->routeIs('roles.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('roles.index') }}"><i class="fas fa-user"></i><span>Manage Role</span></a></li>
                    @endcan

                   {{-- @can('product-list')
                   <li class="{{ request()->routeIs('product.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('product.index') }}"><i class="fas fa-user"></i><span>Product </span></a></li>
                   @endcan

                   @can('spesialis-list')
                   <li class="{{ request()->routeIs('spesialis.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('spesialis.index') }}"><i class="fas fa-user"></i><span>Spesialis</span></a></li>
                   @endcan

                   @can('dokter-list')
                   <li class="{{ request()->routeIs('dokter.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('dokter.index') }}"><i class="fas fa-user"></i><span>Dokter</span></a></li>
                   @endcan

                   @can('pekerjaan-list')
                   <li class="{{ request()->routeIs('pekerjaan.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('pekerjaan.index') }}"><i class="fas fa-user"></i><span>Jobs</span></a></li>
                   @endcan
                   @can('pasien-list')
                   <li class="{{ request()->routeIs('pasien.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('pasien.index') }}"><i class="fas fa-user"></i><span>Pasiens</span></a></li>
                   @endcan
                   @can('poli-list')
                   <li class="{{ request()->routeIs('poli.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('poli.index') }}"><i class="fas fa-user"></i><span>Poli</span></a></li>
                   @endcan

                   @can('registrasi-list')
                   <li class="{{ request()->routeIs('registrasi.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('registrasi.index') }}"><i class="fas fa-user"></i><span>Registrasi Pendaftaran</span></a></li>
                   @endcan
                   @can('pemeriksaanralan-list')
                   <li class="{{ request()->routeIs('pemeriksaanralan.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('pemeriksaanralan.index') }}"><i class="fas fa-user"></i><span>Pemeriksaan Rawat Jalan</span></a></li>
                   @endcan
                   @can('kategoriperawatan-list')
                   <li class="{{ request()->routeIs('kategoriperawatan.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('kategoriperawatan.index') }}"><i class="fas fa-user"></i><span>Kategori Perawatan</span></a></li>
                   @endcan

                   @can('tindakan-list')
                   <li class="{{ request()->routeIs('tindakan.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('tindakan.index') }}"><i class="fas fa-user"></i><span>Tindakan Perawatan</span></a></li>
                   @endcan

            @endguest
            --}}
                {{-- </ul> --}}
            {{-- </li> --}}
            {{-- Log out  --}}
            {{-- <li class="menu-header">Log Out</li> --}}
            <li>
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i><span>Log Out</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </a>
            </li>
        </ul>
    </aside>
</div>
