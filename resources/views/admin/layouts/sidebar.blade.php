<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('admin.dashboard') }}">
            <span class="align-middle">{{config('app.name')}}</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-item {{ Request::is('dashboard/home') ? 'active' : ''}}">
                <a class="sidebar-link" href="{{ url('dashboard/home') }}">
                    <i class="ion-home "></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item @yield('products-menu')">
                <a href="#nav_menu" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="ion-navicon-round"></i><span class="align-middle">Products</span>
                </a>
                <ul id="nav_menu" class="sidebar-dropdown list-unstyled collapse @yield('show')" data-parent="#sidebar">
                    <li class="sidebar-item @yield('all-products')"><a class="sidebar-link" href="{{ route('products.index') }}">All Products</a></li>
                    <li class="sidebar-item @yield('add-products')"><a class="sidebar-link" href="{{ route('products.create') }}">Add Product</a></li>
                    <li class="sidebar-item @yield('all-cat')"><a class="sidebar-link" href="{{ route('categories.index') }}">Categories</a></li>
                    <li class="sidebar-item @yield('all-brands')"><a class="sidebar-link" href="{{ route('brands.index') }}">Brands</a></li>
                </ul>
            </li>

            <li class="sidebar-item @yield('sliders')">
                <a class="sidebar-link" href="{{ route('sliders.index') }}">
                    <i class="ion-person-stalker"></i><span class="align-middle">Sliders</span>
                </a>
            </li>

            <li class="sidebar-item @yield('coupons')">
                <a class="sidebar-link" href="{{ route('coupons.index') }}">
                    <i class="ion-person-stalker"></i><span class="align-middle">Coupons</span>
                </a>
            </li>

            <li class="sidebar-item @yield('cus')">
                <a class="sidebar-link" href="{{ route('customers.index') }}">
                    <i class="ion-person-stalker"></i><span class="align-middle">Customers</span>
                </a>
            </li>

            <li class="sidebar-item @yield('orders')">
                <a class="sidebar-link" href="{{ route('admin.orders.index') }}">
                    <i class="ion-ios7-circle-filled"></i><span class="align-middle">Orders</span>
                </a>
            </li>
            <li class="sidebar-item  @yield('settings')">
                <a class="sidebar-link" href="{{ route('settings') }}">
                    <i class="ion-clock"></i><span class="align-middle">Settings</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" target="_blank" href="{{ route('landing-page') }}">
                    <i class="ion-clock"></i><span class="align-middle">View Site</span>
                </a>
            </li>
        </ul>
    </div>
</nav>